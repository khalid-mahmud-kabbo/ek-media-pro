<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReverseController extends Controller
{
    public function Reverse()
    {
        $data['title'] = __('Publisher Reverse');
        $data['description'] = __('Publisher Reverse');
        $data['keywords'] = __('Publisher Reverse');
        return view('publisher.pages.reverse.reverse', $data);
    }



}
