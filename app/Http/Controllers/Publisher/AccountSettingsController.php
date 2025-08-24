<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountSettingsController extends Controller
{
    public function AccountSettings()
    {
        $data['title'] = __('Publisher Account Settings');
        $data['description'] = __('Publisher Account Settings');
        $data['keywords'] = __('Publisher Account Settings');
        return view('publisher.pages.accountSettings.account_settings', $data);
    }



}
