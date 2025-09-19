<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class IframeController extends Controller
{

    public  function index()
    {

            return view('frontend.pages.iframe.home');

    }

    public  function history()
    {

            return view('frontend.pages.iframe.history');

    }

}
