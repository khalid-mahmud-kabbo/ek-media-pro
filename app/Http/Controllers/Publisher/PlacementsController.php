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
        return view('publisher.pages.placement.placements', $data);
    }

    public function CreatePlacement()
    {
        $data['title'] = __('Publisher Placements');
        $data['description'] = __('Publisher Placements');
        $data['keywords'] = __('Publisher Placements');
        return view('publisher.pages.placement.create_placement', $data);
    }

    public function EditPlacement()
    {
        $data['title'] = __('Publisher Placements');
        $data['description'] = __('Publisher Placements');
        $data['keywords'] = __('Publisher Placements');
        return view('publisher.pages.placement.edit_placement', $data);
    }



}
