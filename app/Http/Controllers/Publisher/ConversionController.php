<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversionController extends Controller
{
    public function Conversion()
    {
        $data['title'] = __('Publisher Conversion');
        $data['description'] = __('Publisher Conversion');
        $data['keywords'] = __('Publisher Conversion');
        return view('publisher.pages.conversion.conversion', $data);
    }



}
