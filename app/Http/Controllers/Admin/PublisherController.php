<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PublisherController extends Controller
{

    public function index()
    {
        $data['title'] = __('Publishers');
        return view('admin.pages.publisher.index', $data);
    }



    public function create()
    {
        $data['title'] = __('Create Publisher');
        return view('admin.pages.publisher.create', $data);
    }

    public function edit()
    {
        $data['title'] = __('Edit Publisher');
        return view('admin.pages.publisher.edit', $data);
    }






}
