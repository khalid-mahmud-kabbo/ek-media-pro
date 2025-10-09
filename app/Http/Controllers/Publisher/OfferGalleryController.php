<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Offers;
use App\Models\Publisher\Placements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class OfferGalleryController extends Controller
{





    public function OfferGallery(Request $request)
    {
        if ($request->ajax()) {
            $data  = Offers::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href=" ' . route('publisher.view-offer', $data->offer_id) . ' " class="btn-action"><i class="fa-solid fa-eye"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('Icon', function ($data) {
                    return '<img src=' . $data->image_url . ' style="border-radius: 50%;" width="50" class="img-rounded" align="center" />';
                })
                ->editColumn('OfferId', function ($data) {
                    return $data->offer_id;
                })
                ->editColumn('OfferName', function ($data) {
                    return $data->name;
                })
                ->editColumn('Category', function ($data) {
                    return $data->categories;
                })
                ->editColumn('Devices', function ($data) {
                    return $data->devices;
                })
                ->editColumn('Platforms', function ($data) {
                    return $data->platforms;
                })
                ->editColumn('Countries', function ($data) {
                    return $data->country_code;
                })
                ->editColumn('Payout', function ($data) {
                    return $data->payout;
                })
                ->editColumn('OS', function ($data) {
                    return $data->os;
                })
                ->rawColumns(['action', 'Icon', 'OfferId', 'OfferName', 'Category', 'Devices', 'Platforms', 'Countries', 'Payout', 'OS'])
                ->make(true);
        }

        $data['title'] = __('Publisher Offer Galler');
        return view('publisher.pages.offerGallery.offer_gallery', $data);
    }


    public function offer($offerId)
{
    $offer = Offers::where('offer_id', $offerId)->first();

    if (!$offer) {
        abort(404, 'Offer not found');
    }

    return view('publisher.pages.offerGallery.view_offer', [
        'offer' => $offer
    ]);
}





public function allOffersviaApi(Request $request)
{
    $api_key = $request->query('api_key');
    $pub_id  = $request->query('pub_id');
    $app_id  = $request->query('app_id');
    $user_id = $request->query('user_id');


    $placement = Placements::where('api_key', $api_key)
        ->where('pub_id', $pub_id)
        ->where('app_id', $app_id)
        ->first();

    if (!$placement) {
        return response()->json([
            'status'  => 'error',
            'code'    => 404,
            'message' => 'Invalid placement or API credentials.',
        ], 404);
    }

    $perPage = 1000;
    $offers = Offers::latest()->paginate($perPage);

    $nextPageUrl = $offers->nextPageUrl()
        ? $offers->nextPageUrl()
        : null;

    return response()->json([
        'status' => 'success',
        'code'   => 200,
        'offers' => [
            'data' => $offers->items(),
            'next_page_url' => $nextPageUrl,
            'has_more_pages' => $offers->hasMorePages(),
            'per_page' => $offers->perPage(),
            'total' => $offers->total(),
        ],
    ], 200);
}





public function filteredOffersviaApi(Request $request)
{
    $api_key        = $request->query('api_key');
    $pub_id         = $request->query('pub_id');
    $app_id         = $request->query('app_id');
    $user_id        = $request->query('user_id');
    $s1             = $request->query('s1');
    $device_name    = $request->query('device_name');
    $device_type    = $request->query('device_type');
    $device_os      = $request->query('device_os');
    $os_version     = $request->query('os_version');
    $browser_name   = $request->query('browser_name');
    $browser_version= $request->query('browser_version');
    $country_code   = strtoupper($request->query('country_code'));
    $user_agent     = $request->query('user_agent');
    $ip             = $request->query('ip');

    $placement = Placements::where('api_key', $api_key)
        ->where('pub_id', $pub_id)
        ->where('app_id', $app_id)
        ->first();

    if (!$placement) {
        return response()->json([
            'status'  => 'error',
            'code'    => 404,
            'message' => 'Invalid placement or API credentials.',
        ], 404);
    }

    $offersQuery = Offers::query();

    if (!empty($device_os)) {
        $offersQuery->whereJsonContains('os', strtolower($device_os))
            ->orWhereJsonContains('platforms', strtolower($device_os));
    }

    if (!empty($device_type)) {
        $offersQuery->whereJsonContains('devices', strtolower($device_type));
    }

    if (!empty($country_code)) {
        $offersQuery->whereJsonContains('country_code', strtoupper($country_code));
    }

    $perPage = 1000;
    $offers = $offersQuery->latest()->paginate($perPage);

    $nextPageUrl = $offers->nextPageUrl() ? $offers->nextPageUrl() : null;

  $offersData = collect($offers->items())->map(function ($offer) use ($user_id) {
    if (!empty($offer->click_url)) {
        $offer->click_url = str_replace('[user_id]', $user_id, $offer->click_url);
    }
    return $offer;
});

    return response()->json([
        'status' => 'success',
        'code'   => 200,
        'offers' => [
            'data' => $offersData,
            'next_page_url' => $nextPageUrl,
            'has_more_pages' => $offers->hasMorePages(),
            'per_page' => $offers->perPage(),
            'total' => $offers->total(),
        ],
    ], 200);
}





public function userBasedOffersviaApi(Request $request)
{
    $api_key         = $request->query('api_key');
    $pub_id          = $request->query('pub_id');
    $app_id          = $request->query('app_id');
    $user_id         = $request->query('user_id');
    $s1              = $request->query('s1');
    $device_name     = $request->query('device_name');
    $device_type     = $request->query('device_type');
    $device_os       = $request->query('device_os');
    $os_version      = $request->query('os_version');
    $browser_name    = $request->query('browser_name');
    $browser_version = $request->query('browser_version');
    $country_code    = strtoupper($request->query('country_code'));
    $user_agent      = $request->query('user_agent');
    $ip              = $request->query('ip');

    $placement = Placements::where('api_key', $api_key)
        ->where('pub_id', $pub_id)
        ->where('app_id', $app_id)
        ->first();

    if (!$placement) {
        return response()->json([
            'status'  => 'error',
            'code'    => 404,
            'message' => 'Invalid placement or API credentials.',
        ], 404);
    }


    $query = Offers::query();

    if (!empty($device_os)) {
        $query->whereJsonContains('os', strtolower($device_os))
              ->orWhereJsonContains('platforms', strtolower($device_os));
    }

    if (!empty($device_type)) {
        $query->whereJsonContains('devices', strtolower($device_type));
    }

    if (!empty($country_code)) {
        $query->whereJsonContains('country_code', strtoupper($country_code));
    }

    $perPage = 1000;
    $surveys = $query->latest()->paginate($perPage);

    $nextPageUrl = $surveys->nextPageUrl() ? $surveys->nextPageUrl() : null;

  $surveysData = collect($surveys->items())->map(function ($survey) use ($user_id) {
    if (!empty($survey->click_url)) {
        $survey->click_url = str_replace('[user_id]', $user_id, $survey->click_url);
    }
    return $survey;
});

    return response()->json([
        'status' => 'success',
        'code'   => 200,
        'offers' => [
            'data' => $surveysData,
            'next_page_url' => $nextPageUrl,
            'has_more_pages' => $surveys->hasMorePages(),
            'per_page' => $surveys->perPage(),
            'total' => $surveys->total(),
        ],
    ], 200);
}





public function topConversionOffersviaApi(Request $request)
{
    $api_key = $request->query('api_key');
    $pub_id  = $request->query('pub_id');
    $app_id  = $request->query('app_id');

    if (!$api_key || !$pub_id || !$app_id) {
        return response()->json([
            'status'  => 'error',
            'code'    => 400,
            'message' => 'Missing required parameters: api_key, pub_id, or app_id.',
        ], 400);
    }

    // Validate placement credentials
    $placement = Placements::where('api_key', $api_key)
        ->where('pub_id', $pub_id)
        ->where('app_id', $app_id)
        ->first();

    if (!$placement) {
        return response()->json([
            'status'  => 'error',
            'code'    => 404,
            'message' => 'Invalid placement or API credentials.',
        ], 404);
    }

    $perPage = 100;
    $offers = Offers::orderByDesc('payout')
        ->paginate($perPage);

    $nextPageUrl = $offers->nextPageUrl() ?: null;

    return response()->json([
        'status' => 'success',
        'code'   => 200,
        'offers' => [
            'data' => $offers->items(),
            'next_page_url' => $nextPageUrl,
            'has_more_pages' => $offers->hasMorePages(),
            'per_page' => $offers->perPage(),
            'total' => $offers->total(),
        ],
    ], 200);
}






}
