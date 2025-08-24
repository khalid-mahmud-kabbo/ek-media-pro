<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
    public function Payments()
    {
        $data['title'] = __('Publisher Payments');
        $data['description'] = __('Publisher Payments');
        $data['keywords'] = __('Publisher Payments');
        return view('publisher.pages.payments.payments', $data);
    }



}
