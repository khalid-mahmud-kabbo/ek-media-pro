<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublisherProfileController extends Controller
{
    public function publisherProfile()
    {
        $authId = Auth::user()->id;
        $data['user'] = User::where('id', $authId)->first();
        $data['title'] = __('Publisher Panel');
        $data['description'] = __('Publisher Panel');
        $data['keywords'] = __('Publisher Panel');
        return view('publisher.pages.profile.profile', $data);
    }
    public function publisherProfileEdit()
    {
        $authId = Auth::user()->id;
        $data['user'] = User::where('id', $authId)->first();
        $data['title'] = __('Publisher Panel');
        $data['description'] = __('Publisher Panel');
        $data['keywords'] = __('Publisher Panel');
        return view('publisher.pages.profile.profile_edit', $data);
    }
    public function publisherProfileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'dob' => 'required',
            'gender' => 'required',
            'number' => 'required'
        ], [
            'dob' => 'The date of birth is required'
        ]);

        if (!empty($request->image)) {
            $image = fileUpload($request['image'], AdminProfilePicture());
        } else {
            $authId = Auth::user()->id;
            $update = User::where('id', $authId)->first();
            $image = $update->image;
        }

        $authId = Auth::user()->id;
        $user = User::where('id', $authId)->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $image,
            'street_address' => $request->street_address,
            'Number' => $request->number,
            'Gender' => $request->gender,
            'DOB' => $request->dob,
            'About' => $request->about,
        ]);
        if ($user) {
            return redirect()->back()->with('success', __('Successfully Updated!'));
        }
        return redirect()->back()->with('success', __('Something Went Wrong!'));
    }


}
