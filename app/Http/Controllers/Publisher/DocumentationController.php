<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentationController extends Controller
{
    public function Documentation()
    {
        $data['title'] = __('Publisher Documentation');
        $data['description'] = __('Publisher Documentation');
        $data['keywords'] = __('Publisher Documentation');
        return view('publisher.pages.documentation.documentation', $data);
    }



}
