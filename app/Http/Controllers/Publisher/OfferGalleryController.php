<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferGalleryController extends Controller
{
    public function OfferGallery()
    {
        $data['title'] = __('Publisher Offer Gallery');
        $data['description'] = __('Publisher Offer Gallery');
        $data['keywords'] = __('Publisher Offer Gallery');
        return view('publisher.pages.offerGallery.offer_gallery', $data);
    }



}
