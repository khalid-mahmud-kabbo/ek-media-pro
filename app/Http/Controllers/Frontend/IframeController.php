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

    Log::info("IframeController", [
        'api_key' => $api_key,
        'pub_id'  => $pub_id,
        'app_id'  => $app_id,
        'user_id' => $user_id
    ]);

    $placement = Placements::where('api_key', $api_key)
        ->where('pub_id', $pub_id)
        ->where('app_id', $app_id)
        ->first();

    if (!$placement) {
        return view('errors.404');
    }

    // filter check
    $allowedFilters = ['all', 'android', 'ios', 'windows', 'web'];
    $filter = $request->query('filter', 'all');

    if (!in_array($filter, $allowedFilters)) {
        $filter = 'all'; // fallback if invalid filter
    }

    $offersQuery = Offers::latest();

    if ($filter !== 'all') {
        $offersQuery->whereJsonContains('os', $filter);
    }

    $offers = $offersQuery->get();

    return view('frontend.pages.iframe.home', compact('offers', 'filter'));
}



public function filter(Request $request)
{
    $filter = $request->query('filter', 'all');
    $offersQuery = Offers::latest();

    if ($filter !== 'all') {
        $offersQuery->whereJsonContains('os', $filter);
    }

    $offers = $offersQuery->get();

    // শুধু offers এর row render হবে
    return view('frontend.pages.iframe.partials.offers', compact('offers'));
}






}
