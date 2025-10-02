<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountSettingsController extends Controller
{
    public function AccountSettings()
    {
        $user = User::find(Auth::user()->id);
        $data['user'] = $user;
        $data['title'] = __('Publisher Account Settings');
        $data['description'] = __('Publisher Account Settings');
        $data['keywords'] = __('Publisher Account Settings');
        return view('publisher.pages.accountSettings.account_settings', $data);
    }


     public function UpdateAccountSettings(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->update([
        'name' => $request->full_name ?? $user->name,
        'Number' => $request->phone_number ?? $user->Number,
        'country' => $request->country ?? $user->country,
        'city' => $request->city ?? $user->city,
        'post_code' => $request->postal_code ?? $user->post_code,
        'address' => $request->address ?? $user->address
    ]);

    return redirect()->route('publisher.account-settings')->with('success', __('Successfully Updated!'));
    }



}
