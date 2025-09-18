<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Offers;
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




}
