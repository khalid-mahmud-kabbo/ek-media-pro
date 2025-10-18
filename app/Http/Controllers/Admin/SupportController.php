<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SupportController extends Controller
{

    public function livechat()
    {
        $data['title'] = __('Live Chat');
        return view('admin.pages.support.live-chat', $data);
    }



    public function tickets()
    {
        $data['title'] = __('Tickets');
        return view('admin.pages.support.tickets', $data);
    }





}
