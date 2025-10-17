<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class OffersController extends Controller
{

    public function index()
    {
        $data['title'] = __('Offers');
        return view('admin.pages.offers.index', $data);
    }



    public function create()
    {
        $data['title'] = __('Create Offer');
        return view('admin.pages.offers.create', $data);
    }

    public function edit()
    {
        $data['title'] = __('Edit Offer');
        return view('admin.pages.offers.edit', $data);
    }


    public function fetchOffers()
    {
        $data['title'] = __('Fetch Offers');
        return view('admin.pages.offers.fetch-offer', $data);
    }

    public function offersProvider()
    {
        $data['title'] = __('Offers Provider');
        return view('admin.pages.offers.offers-provider', $data);
    }








}
