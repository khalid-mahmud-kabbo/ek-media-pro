<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAuthRequest;
use App\Http\Requests\UserChangePasswordRequest;
use App\Models\SeoSetting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\Send2FACode;
use App\Mail\Send2FAVerificationLink;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function SignIn()
    {
        if (Auth::check()) {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('front');
            }
        }
        $seo = SeoSetting::where('slug', 'sign-in')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        return view('frontend.pages.auth.sign_in', $data);
    }


    public function SignInPost(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->where('is_admin', 0)->first();

    if ($user) {
        if ($user->status == INACTIVE) {
            return redirect()->route('front')->with('error', __('User is blocked by admin.'));
        }

        if (Hash::check($request->password, $user->password)) {

            if ($user->f2_status == 'enabled') {
                $token = rand(100000, 999999);
                $user->login_2fa_token = $token;
                $user->save();

                Mail::to($user->email)->send(new Send2FACode($token, 'Login Verification Code'));

                Session::put('2fa_user_id', $user->id);

                return redirect()->route('login.2fa.verify')
                                 ->with('info', 'A verification code has been sent to your email.');
            }

            Auth::login($user);

            return redirect()->route('publisher.dashboard');
        }
    }

    return redirect()->back()->with('error', __('Credential Not Match'));
}

    public function SignUp()
    {
        $seo = SeoSetting::where('slug', 'sign-up')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        return view('frontend.pages.auth.sign_up', $data);
    }


    public function SignUpPost(UserAuthRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'account_type' => $request->account_type,
            'password' => Hash::make($request->confirm_password),
        ]);
        if ($user) {
            return redirect()->route('front')->with('success', __('Sign Up Successfully !'));
        } else {
            return redirect()->route('user.sign.up')->with('success', __('Wrong Credential !'));
        }
    }
    public function Logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('front');
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }
    public function ChangePassword(UserChangePasswordRequest $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        $user = User::find(Auth::user()->id);
        $userPassword = $user->password;

        if (!Hash::check($request->current_password, $userPassword)) {
            return redirect()->back()->with('error', __('Current Password Not Match!'));
        }
        $user->password = Hash::make($request->new_password);
        $user->save();
        return redirect()->back()->with('success', __('Password change successfully!'));
    }



    //forget password
    public function ForgetPasswordGet()
    {
        $seo = SeoSetting::where('slug', 'forget-password')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        return view('frontend.pages.auth.forget_password', $data);
    }
    public function ForgetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('frontend.pages.auth.mail_form', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('success', 'We have e-mailed your password reset link!');
    }
    public function ShowResetPasswordForm($token)
    {
        $seo = SeoSetting::where('slug', 'reset-password')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        $data['token'] = $token;
        return view('frontend.pages.auth.show_reset_form', $data);
    }
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();
        if ($user) {
            return redirect()->route('login')->with('success', 'Your password has been changed!');
        }
        return redirect()->back()->with('error', 'Your password not changed!');
    }


   public function toggle2FA(Request $request)
{
    /** @var User $user */
    $user = Auth::user();

    if ($user->f2_status == 'disabled') {
        $token = Str::random(64);
        $user->f2_verification_token = $token;
        $user->save();

        $verificationUrl = url("/authx/verify-2fa/{$token}");
        Mail::to($user->email)->send(new Send2FAVerificationLink($verificationUrl));

        return redirect()->back()->with('info', 'A verification link has been sent to your email to enable 2FA.');
    } else {
        $user->f2_status = 'disabled';
        $user->f2_verification_token = null;
        $user->save();

        return redirect()->back()->with('success', 'Two-Factor Authentication disabled.');
    }
}


public function verifyEnable2FA($token)
{
    $user = \App\Models\User::where('f2_verification_token', $token)->first();

    if (!$user) {
        return redirect('/')->with('error', 'Invalid or expired verification link.');
    }

    $user->f2_status = 'enabled';
    $user->f2_verification_token = null;
    $user->save();

    return redirect()->route('publisher.account-settings')->with('success', 'Two-Factor Authentication successfully verified and enabled.');
}




public function show2FAVerify()
{
    return view('frontend.pages.auth.2fa-verify');
}

public function verify2FA(Request $request)
{
    $request->validate([
        'code' => 'required|numeric',
    ]);

    $userId = Session::get('2fa_user_id');

    if (!$userId) {
        return redirect()->route('front')->with('error', 'Session expired.');
    }

    $user = User::find($userId);

    if ($user && $user->login_2fa_token == $request->code) {
        Auth::login($user);
        $user->login_2fa_token = null;
        $user->save();
        Session::forget('2fa_user_id');

        return redirect()->route('publisher.dashboard');
    }

    return redirect()->back()->with('error', 'Invalid verification code.');
}



}
