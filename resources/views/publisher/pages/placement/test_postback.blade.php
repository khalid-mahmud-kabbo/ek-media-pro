@extends('publisher.layout.master', ['menu' => 'placements', 'submenu' => 'my_placements'])
@section('title', isset($title) ? $title : 'Publisher Test Postback')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Test Postback')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Test Postback')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">


                <h4>{{__('Test Postback URL')}}</h4>
                <p>{{ $placement->postback_url }}</p>


                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-vertical__item bg-style">
{{-- Success Message --}}
@if(session('success'))
    <div class="alert alert-success mt-3">
        <strong>{{ session('success') }}</strong>
    </div>
@endif

{{-- Error Message --}}
@if(session('error'))
    <div class="alert alert-danger mt-3">
        <strong>{{ session('error') }}</strong>
    </div>
@endif

{{-- Postback Response --}}
@if(session('postback_response'))
    <div class="alert alert-info mt-3">
        <strong>Postback Response:</strong> <br>
        <pre>{{ session('postback_response') }}</pre>
    </div>
@endif

                                        <form enctype="multipart/form-data" method="POST" action="{{ route('publisher.send-test-postback') }}">
                                            @csrf


                                            <input type="hidden" name="app_id" value="{{ $placement->app_id }}">

                                            <div class="row">

                                                <div class="col-md-3">
                                            <div class="input__group mb-25">
                                                <label>{{ __('User ID') }} <span class="text-danger">*</span></label>
                                                <input type="text" id="user_id" name="user_id" placeholder="User ID">
                                            </div>
                                            </div>

                                            <div class="col-md-3">
                                            <div class="input__group mb-25">
                                                <label>{{ __('Payout') }} <span class="text-danger">*</span></label>
                                                <input type="number" id="payout" name="payout" placeholder="Payout">
                                            </div>
                                            </div>

                                            <div class="col-md-3">
                                            <div class="input__group mb-25">
                                                <label>{{ __('Offer ID') }} <span class="text-danger">*</span></label>
                                                <input type="text" id="offer_id" name="offer_id" placeholder="Offer ID">
                                            </div>
                                            </div>

                                            <div class="col-md-3">
                                            <div class="input__group mb-25">
                                                <label>{{ __('Conversion IP') }}</label>
                                                <input type="ip" id="conversion_ip" name="conversion_ip" placeholder="Conversion IP">
                                            </div>
                                            </div>



                                            </div>









                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Test Postback') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
