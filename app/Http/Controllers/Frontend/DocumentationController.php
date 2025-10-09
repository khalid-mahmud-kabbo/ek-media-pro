<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;

class DocumentationController extends Controller
{

    public  function allOffersApi()
    {

            $seo = SeoSetting::where('slug', 'home')->first();
            $data['title'] = $seo->title;
            $data['description'] = $seo->description;
            $data['keywords'] = $seo->keywords;
            return view('frontend.pages.docs.all-offers-api', $data);

    }



     public  function filteredOffersApi()
    {

            $seo = SeoSetting::where('slug', 'home')->first();
            $data['title'] = $seo->title;
            $data['description'] = $seo->description;
            $data['keywords'] = $seo->keywords;
            return view('frontend.pages.docs.filtered-offers-api', $data);

    }


     public  function iframeDetails()
    {

            $seo = SeoSetting::where('slug', 'home')->first();
            $data['title'] = $seo->title;
            $data['description'] = $seo->description;
            $data['keywords'] = $seo->keywords;
            return view('frontend.pages.docs.iframe-details', $data);

    }


     public  function postbackDetails()
    {

            $seo = SeoSetting::where('slug', 'home')->first();
            $data['title'] = $seo->title;
            $data['description'] = $seo->description;
            $data['keywords'] = $seo->keywords;
            return view('frontend.pages.docs.postback-details', $data);

    }


     public  function topConversionOffersApi()
    {

            $seo = SeoSetting::where('slug', 'home')->first();
            $data['title'] = $seo->title;
            $data['description'] = $seo->description;
            $data['keywords'] = $seo->keywords;
            return view('frontend.pages.docs.top-conversion-offers-api', $data);

    }

     public  function userBasedOffers()
    {

            $seo = SeoSetting::where('slug', 'home')->first();
            $data['title'] = $seo->title;
            $data['description'] = $seo->description;
            $data['keywords'] = $seo->keywords;
            return view('frontend.pages.docs.user-based-offers', $data);

    }




}
