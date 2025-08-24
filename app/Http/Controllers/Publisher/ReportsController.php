<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{
    public function Reports()
    {
        $data['title'] = __('Publisher Reports');
        $data['description'] = __('Publisher Reports');
        $data['keywords'] = __('Publisher Reports');
        return view('publisher.pages.reports.reports', $data);
    }



}
