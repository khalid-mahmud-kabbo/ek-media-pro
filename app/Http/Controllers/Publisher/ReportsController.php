<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Publisher\Reports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;

class ReportsController extends Controller
{

    public function Reports(Request $request)
    {
        if ($request->ajax()) {
            $data = Reports::query()->with('publisher')->where('pub_id', Auth::id())->orderByDesc('id')->get();
            return DataTables::of($data)
                ->editColumn('OfferId', function ($data) {
                    return $data->offer_id;
                })
                ->editColumn('AppName', function ($data) {
                    return $data->placement->app_name;
                })
                ->editColumn('UserId', function ($data) {
                    return $data->user_id;
                })
                ->editColumn('offer_name', function ($data) {
                    return $data->offer_name;
                })
                ->editColumn('payout', function ($data) {
                    return $data->payout;
                })
                ->editColumn('created_at', function ($data) {
                    return $data->created_at;
                })
                ->editColumn('ip_address', function ($data) {
                    return $data->ip_address;
                })
                ->editColumn('Status', function ($data) {
                    if ($data->status == 'Completed') {
                        $active = "Completed";
                        return '<span class="status active">' . $active . '</span>';
                    } elseif ($data->status == 'Hold') {
                        $active = "Hold";
                        return '<span class="status rejected">' . $active . '</span>';
                    } else {
                        $active = "Pending";
                        return '<span class="status pending">' . $active . '</span>';
                    }
                })
                ->rawColumns(['OfferId', 'AppName', 'UserId', 'offer_name', 'payout', 'created_at', 'ip_address', 'Status'])
                ->addIndexColumn()
                ->make(true);
        }
        $data['title'] = __('Publisher Reversals');
        return view('publisher.pages.reports.reports', $data);
    }



}
