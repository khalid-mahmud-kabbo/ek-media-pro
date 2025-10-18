<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdvertiserController extends Controller
{

    public function index()
    {
        $data['title'] = __('Advertisers');
        return view('admin.pages.advertiser.index', $data);
    }



    public function create()
    {
        $data['title'] = __('Create Advertiser');
        return view('admin.pages.advertiser.create', $data);
    }

    public function edit()
    {
        $data['title'] = __('Edit Advertiser');
        return view('admin.pages.advertiser.edit', $data);
    }






}
