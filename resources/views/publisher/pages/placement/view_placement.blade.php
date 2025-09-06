@extends('publisher.layout.master', ['menu' => 'placements', 'submenu' => 'my_placements'])
@section('title', isset($title) ? $title : 'Publisher View Placement')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>View Placement Details</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('View Placement')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">
                <h1>APP Name: {{ $placement->app_name }}</h1>

        <div class="row" style="margin-top: 3rem;">

            <div class="col-md-6">

<div class="input__group mb-25">
                <label>{{ __('APP ID') }}</label>
                <input type="text" value="{{ $placement->is_active == 'active' ? $placement->app_id : 'YOUR_APP_ID' }}" readonly>
                </div>
                </div>

<div class="col-md-6">
<div class="input__group mb-25">
                <label>{{ __('Publisher ID') }}</label>
                <input type="text" value="{{ $placement->pub_id }}" readonly>
                </div>
                </div>

                <div class="col-md-6">
<div class="input__group mb-25">
                <label>{{ __('API Key') }}</label>
                <input type="text" value="{{ $placement->is_active == 'active' ? $placement->api_key : 'YOUR_API_KEY' }}" readonly>
                </div>
                </div>

<div class="col-md-6">
<div class="input__group mb-25">
                <label>{{ __('Reward Name') }}</label>
                <input type="text" value="{{ $placement->currency_name }}" readonly>
                </div>
                </div>

                <div class="col-md-6">
<div class="input__group mb-25">
                <label>{{ __('Payout Ratio') }}</label>
                <input type="text" value="{{ $placement->payout_rate }}" readonly>
                </div>
                </div>

                <div class="col-md-6">
<div class="input__group mb-25">
                <label>{{ __('APP Status') }}</label>
                <input type="text" value="{{ strtoupper($placement->is_active) }}" readonly>
                </div>
                </div>



                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                 <div class="input__group mb-25">
                <label>{{ __('Iframe Url') }}</label>
               <input type="text"
    value="{{ env('IFRAME_URL') }}/{{ $placement->currency_name }}?api_key={{ $placement->is_active == 'active' ?$placement->api_key : 'YOUR_API_KEY' }}&pub_id={{ $placement->pub_id }}&app_id={{ $placement->is_active == 'active' ?$placement->app_id : 'YOUR_APP_ID' }}&user_id={{ env('POSTBACK_PARAMITER') }}"
    readonly>



                </div>

               <div class="input__group mb-25">
                <label>{{ __('Offer API Url') }}</label>
                <input type="text" value="{{ env('OFFER_URL') }}?api_key={{ $placement->is_active == 'active' ?$placement->api_key : 'YOUR_API_KEY' }}&pub_id={{ $placement->pub_id }}&app_id={{ $placement->is_active == 'active' ?$placement->app_id : 'YOUR_APP_ID' }}" readonly>
                  </div>

                  <div class="input__group mb-25">
                <label>{{ __('Postback Url') }}</label>
                <input type="text" value="{{ $placement->postback_url }}" readonly>
                </div>





<p><a href="{{ route('publisher.documentation') }}" target="_blank"><strong>{{ __('Integration Documentation') }} <i class="fa-solid fa-arrow-up-right-from-square"></i></strong></a></p>



                </div>
                                            </div>



            </div>
        </div>
    </div>
@endsection
