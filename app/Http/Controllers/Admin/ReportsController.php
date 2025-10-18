<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ReportsController extends Controller
{

    public function publisherReports()
    {
        $data['title'] = __('Publishers Reports');
        return view('admin.pages.reports.publisher-reports', $data);
    }



    public function advertiserReports()
    {
        $data['title'] = __('Advertiser Reports');
        return view('admin.pages.reports.advertiser-reports', $data);
    }

    public function offerReports()
    {
        $data['title'] = __('Offers Reports');
        return view('admin.pages.reports.offer-reports', $data);
    }


    public function depositsReports()
    {
        $data['title'] = __('Deposits Reports');
        return view('admin.pages.reports.deposit-reports', $data);
    }



    public function withdrawalsReports()
    {
        $data['title'] = __('Withdrawals Reports');
        return view('admin.pages.reports.withdrawal-reports', $data);
    }

    public function creditsReports()
    {
        $data['title'] = __('Credits Reports');
        return view('admin.pages.reports.credit-reports', $data);
    }

    public function chargebackReports()
    {
        $data['title'] = __('Chargeback Reports');
        return view('admin.pages.reports.chargeback-reports', $data);
    }






}
