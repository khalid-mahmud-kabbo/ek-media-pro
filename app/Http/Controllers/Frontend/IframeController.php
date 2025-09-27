<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offers;
use App\Models\Publisher\Placements;
use Illuminate\Support\Facades\Log;

class IframeController extends Controller
{

    public function index(Request $request)
    {
        $api_key = $request->query('api_key');
        $pub_id  = $request->query('pub_id');
        $app_id  = $request->query('app_id');
        $user_id = $request->query('user_id');

        Log::info("IframeController", ['api_key' => $api_key, 'pub_id' => $pub_id, 'app_id' => $app_id, 'user_id' => $user_id]);

        $placement = Placements::where('api_key', $api_key)
            ->where('pub_id', $pub_id)
            ->where('app_id', $app_id)
            ->first();

        if (!$placement) {
                return view('errors.404');
            }

        $offers = Offers::latest()->get();

        return view('frontend.pages.iframe.home', compact('offers'));
    }



}
