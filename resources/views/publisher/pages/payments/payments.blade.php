@extends('publisher.layout.master', ['menu' => 'payments'])
@section('title', isset($title) ? $title : 'Publisher Payments')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Payments')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Payments')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">

                <h4>Your Payment Terms: NET30 (Min: $25.00)</h4>

                <div class="the-payment-term-box">
                    <div class="icon-of">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>
                    <div class="details">
                    <h6>How does net 30 work?</h6>
                    <p>For example, if your earnings are over $ 25 for August you will be paid August earnings on October 7st.</p>
                    </div>
            </div>



                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-vertical__item bg-style">
                                        <h4 class="mb-25">Edit / Set Payment Method</h4>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('publisher.store-placement') }}">
                                            @csrf



                                            <div class="row">
<div class="col-md-6">
    <div class="input__group mb-25">
        <label>{{ __('Payment Method') }} <span class="text-danger">*</span></label>
        <select id="payment_method" name="payment_method" class="form-control">
            <option value="">{{ __('Select Payment Method') }}</option>
            {{-- @foreach($placements as $placement) --}}
                <option value="">
                    Payoneer
                </option>
                <option value="">
                    Payoneer
                </option>
                <option value="">
                    Payoneer
                </option>
            {{-- @endforeach --}}
        </select>
    </div>
</div>


                                            <div class="col-md-6">
                                            <div class="input__group mb-25">
                                                <label>{{ __('Payment Details') }} <span class="text-danger">*</span></label>
                                                <input type="url" id="payment_details" name="payment_details" placeholder="Payment Details">
                                            </div>
                                            </div>

                                            </div>

                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Set Payment Method') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>












                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-vertical__item bg-style">
                                        <h4 class="mb-25">Payments / History</h4>

<div id="table-url" data-url="{{ route('publisher.payments') }}"></div>

<table id="PaymentsTable" class="row-border data-table-filter table-style">
                        <thead>
                        <tr>
                            <th>{{ __('#')}}</th>
                            <th>{{ __('Payment Method')}}</th>
                            <th>{{ __('Payment Info')}}</th>
                            <th>{{ __('Amount')}}</th>
                            <th>{{ __('View Details')}}</th>
                            <th>{{ __('Status')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>

    @push('post_scripts')
        <script src="{{asset('backend/js/publisher/datatables/payments.js')}}"></script>
    @endpush
@endsection
