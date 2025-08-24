<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $data['title'] = __('Publisher Dashboard');
        $data['description'] = __('Publisher Dashboard');
        $data['keywords'] = __('Publisher Dashboard');
        return view('publisher.pages.dashboard.dashboard', $data);
    }



}
