<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Publisher\PaymentProfile;
use App\Models\Publisher\PublisherPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{


    public function Payments(Request $request)
{
    if ($request->ajax()) {
        $query = PublisherPayment::with(['publisher', 'paymentMethod'])
            ->where('pub_id', Auth::id())
            ->orderByDesc('id');

        // ✅ Date Range Filter
        if (!empty($request->from_date) && !empty($request->to_date)) {
            $query->whereBetween('created_at', [
                $request->from_date . ' 00:00:00',
                $request->to_date . ' 23:59:59',
            ]);
        }

        return DataTables::eloquent($query)
            ->editColumn('PaymentMethod', fn($data) => $data->paymentMethod->name ?? 'N/A')
            ->editColumn('PaymentInfo', fn($data) => e($data->payment_address))
            ->editColumn('Amount', fn($data) => number_format($data->amount, 2))
            ->editColumn('ViewDetails', fn($data) => e($data->earning_and_payment_date))
            ->editColumn('Status', function ($data) {
                return match ($data->status) {
                    'completed' => '<span class="status active">Completed</span>',
                    'rejected' => '<span class="status rejected">Rejected</span>',
                    default => '<span class="status pending">Pending</span>',
                };
            })
            ->rawColumns(['Status'])
            ->addIndexColumn()
            ->make(true);
    }

    $pub_id = Auth::id();
    $data['paymentMethod'] = PaymentProfile::where('pub_id', $pub_id)->first();
    $data['title'] = __('Publisher Payments');

    return view('publisher.pages.payments.payments', $data);
}



    //  public function Payments(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = PublisherPayment::query()->with('publisher')->where('pub_id', Auth::id())->orderByDesc('id')->get();
    //         return DataTables::of($data)
    //             ->editColumn('PaymentMethod', function ($data) {
    //                 return $data->paymentMethod->name;
    //             })
    //             ->editColumn('PaymentInfo', function ($data) {
    //                 return $data->payment_address;
    //             })
    //             ->editColumn('Amount', function ($data) {
    //                 return $data->amount;
    //             })
    //             ->editColumn('ViewDetails', function ($data) {
    //                 return $data->earning_and_payment_date;
    //             })
    //             ->editColumn('Status', function ($data) {
    //                 if ($data->status == 'completed') {
    //                     $active = "Completed";
    //                     return '<span class="status active">' . $active . '</span>';
    //                 } elseif ($data->status == 'rejected') {
    //                     $active = "Rejected";
    //                     return '<span class="status rejected">' . $active . '</span>';
    //                 } else {
    //                     $active = "Pending";
    //                     return '<span class="status pending">' . $active . '</span>';
    //                 }
    //             })
    //             ->rawColumns(['action', 'PaymentMethod', 'PaymentInfo', 'Amount', 'ViewDetails', 'Status'])
    //             ->addIndexColumn()
    //             ->make(true);
    //     }

    //     $pub_id = Auth::user()->id;
    //     $paymentMethod = PaymentProfile::where('pub_id', $pub_id)->first();
    //     $data['paymentMethod'] = $paymentMethod;
    //     $data['title'] = __('Publisher Payments');
    //     return view('publisher.pages.payments.payments', $data);
    // }



    public function UpdatePaymentMethod(Request $request, $pubId)
{
    $pub_id = Auth::user()->id;
    $paymentMethod = PaymentProfile::where('pub_id', $pubId)->first();

    if (!$paymentMethod) {
        $paymentMethod = PaymentProfile::create([
            'pub_id' => $pub_id,
            'payment_method_id' => $request->payment_method_id,
            'payment_address' => $request->payment_address,
        ]);
        return redirect()->route('publisher.payments')->with('success', __('Successfully Created!'));
    }

    $paymentMethod->update([
        'payment_method_id' => $request->payment_method_id ?? $paymentMethod->payment_method_id,
        'payment_address' => $request->payment_address ?? $paymentMethod->payment_address,
        'pub_id' => $pub_id,
    ]);

    return redirect()->route('publisher.payments')->with('success', __('Successfully Updated!'));
}





}
