<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Publisher\PaymentProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentProfileController extends Controller
{

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
