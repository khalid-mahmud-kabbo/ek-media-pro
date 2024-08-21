<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\DashboardRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function __construct(DashboardRepository $repository)
    {
        $this->repository = $repository;
    }

    public  function Dashboard()
    {
        if (Auth::check()) {
            $days = "";
            $sales = "";


            $earning_days = "";
            $incomes = "";


            $data['order_days'] = $days;
            $data['order_sales'] = $sales;
            $data['earning_days'] = $earning_days;
            $data['total_incomess'] = $incomes;
            $data['title'] = __('Dashboard');
            return view('admin.pages.dashboard', $data);
        }
        return redirect()->route('login')->with('error', __('Wrong Credential'));
    }
}
