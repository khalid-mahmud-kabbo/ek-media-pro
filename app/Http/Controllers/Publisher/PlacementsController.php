<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Publisher\Placements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class PlacementsController extends Controller
{

    public function Placements(Request $request)
    {
        if ($request->ajax()) {
            $data = Placements::query()->with('publisher')->where('pub_id', Auth::id())->orderByDesc('id')->get();
            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';

                    $btn = $btn . '<a href="' . route('publisher.placement', $data->app_id) . '" class="btn-action"><i class="fa-solid fa-eye"></i></a>';

                    if ($data->is_active == 'active') {
                        $btn = $btn . '<a href="' . route('publisher.edit-placement', $data->app_id) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    }
                    $btn = $btn . '<a href="' . route('publisher.delete', $data->app_id) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('AppName', function ($data) {
                    return $data->app_name;
                })
                ->editColumn('APIKey', function ($data) {
                    return $data->api_key;
                })
                ->editColumn('PayoutRate', function ($data) {
                    return $data->payout_rate;
                })
                ->editColumn('Status', function ($data) {
                    if ($data->is_active == 'active') {
                        $active = "Active";
                        return '<span class="status active">' . $active . '</span>';
                    } elseif ($data->is_active == 'rejected') {
                        $active = "Rejected";
                        return '<span class="status rejected">' . $active . '</span>';
                    } else {
                        $active = "Pending for Approval";
                        return '<span class="status pending">' . $active . '</span>';
                    }
                })
                ->rawColumns(['action', 'AppName', 'APIKey', 'PayoutRate', 'Status'])
                ->addIndexColumn()
                ->make(true);
        }
        $data['title'] = __('Publisher Placements');
        return view('publisher.pages.placement.placements', $data);
    }




    public function CreatePlacement()
    {
        $data['title'] = __('Publisher Placements');
        $data['description'] = __('Publisher Placements');
        $data['keywords'] = __('Publisher Placements');
        return view('publisher.pages.placement.create_placement', $data);
    }



public function StorePlacement(Request $request)
{
    $app_id = Str::random(16);
    $api_key = Str::random(32);
    $pub_id = Auth::user()->id;

    if (($request->currency_logo)) {
            $currency_logo = fileUpload($request['currency_logo'], upload_currency_logo());
        } else{
            $currency_logo = null;
        }

    $placement = Placements::create([
        'pub_id' => $pub_id,
        'app_id' => $app_id,
        'api_key' => $api_key,
        'app_name' => $request->app_name,
        'app_url' => $request->app_url,
        'payout_rate' => $request->payout_rate,
        'currency_name' => $request->currency_name,
        'currency_logo' => $currency_logo,
        'generel_description' => $request->generel_description,
        'postback_url' => $request->postback_url,
        'postback_password' => $request->postback_password,
    ]);

    if ($placement) {
        return redirect()->route('publisher.placements')->with('success', __('Successfully Stored !'));
    }

    return redirect()->back()->with('error', __('Does not insert !'));
}


    public function EditPlacement()
    {
        $data['title'] = __('Publisher Placements');
        $data['description'] = __('Publisher Placements');
        $data['keywords'] = __('Publisher Placements');
        return view('publisher.pages.placement.edit_placement', $data);
    }



     public function UpdatePlacement(Request $request)
    {
        $id = $request->id;
        $placement = Placements::whereId($id)->first();

        if (($request->currency_logo)) {
            $currency_logo = fileUpload($request['currency_logo'], upload_currency_logo());
        } else{
            $currency_logo = $placement->currency_logo;
        }

        $update = $placement->update([
            'app_name' => is_null($request->app_name) ? $placement->app_name : $request->app_name,
            'payout_rate' => is_null($request->payout_rate) ? $placement->payout_rate : $request->payout_rate,
            'currency_name' => is_null($request->currency_name) ? $placement->currency_name : $request->currency_name,
            'currency_logo' => $currency_logo,
            'generel_description' => is_null($request->generel_description) ? $placement->generel_description : $request->generel_description,
            'postback_url' => is_null($request->postback_url) ? $placement->postback_url : $request->postback_url,
            'postback_password' => is_null($request->postback_password) ? $placement->postback_password : $request->postback_password,
        ]);
        if ($update) {
            return redirect()->route('publisher.placements')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }


    public function delete($appId)
    {

        $delete = Placements::Where('app_id', $appId);
        if ($delete) {
            $delete->delete();
            return redirect()->route('publisher.placements')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('publisher.placements')->with('error', __('Does Not Delete!'));
    }

public function Placement($appId)
{
    $placement = Placements::where('app_id', $appId)->first(); // record fetch

    if (!$placement) {
        abort(404, 'Placement not found');
    }

    return view('publisher.pages.placement.view_placement', [
        'placement' => $placement
    ]);
}



}
