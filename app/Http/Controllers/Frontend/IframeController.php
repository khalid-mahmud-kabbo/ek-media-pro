<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Offers;

class IframeController extends Controller
{

    public  function index()
    {
         $offers = Offers::latest()->get();

        return view('frontend.pages.iframe.home', compact('offers'));


    }

    public  function history()
    {

            return view('frontend.pages.iframe.history');

    }

}
