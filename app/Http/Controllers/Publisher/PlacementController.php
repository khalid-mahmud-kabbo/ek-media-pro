<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlacementsController extends Controller
{
    public function Placements()
    {
        $data['title'] = __('Publisher Placements');
        $data['description'] = __('Publisher Placements');
        $data['keywords'] = __('Publisher Placements');
        return view('publisher.pages.placements.placements', $data);
    }



}
