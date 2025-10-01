@extends('publisher.layout.master')
@section('title', isset($title) ? $title : 'Publisher Edit Placement')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Edit Placement')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Edit Placement')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">

                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-vertical__item bg-style">
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('publisher.update-placement') }}">
                                            @csrf

                                             <input type="hidden" name="app_id" value="{{ $edit->app_id }}">

                                            <div class="row">

                                                <div class="col-md-6">
                                            <div class="input__group mb-25">
                                                <label>{{ __('Placement Name') }} <span class="text-danger">*</span></label>
                                                <input type="text" id="app_name" name="app_name" value="{{ $edit->app_name }}" readonly>
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                            <div class="input__group mb-25">
                                                <label>{{ __('App URL') }} <span class="text-danger">*</span></label>
                                                <input type="url" id="app_url" name="app_url" value="{{ $edit->app_url }}" readonly>
                                            </div>
                                            </div>

                                            </div>


                                            <div class="row">

                                            <div class="col-md-6">
                                            <div class="input__group mb-25">
                                                <label>{{ __('Postback URL') }} <span class="text-danger">*</span></label>
                                                <input type="url" id="postback_url" name="postback_url" value="{{ $edit->postback_url }}">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="input__group mb-25">
                                                <label>{{ __('Postback Password (Optional)') }}</label>
                                                <input type="text" id="postback_password" name="postback_password" value="{{ $edit->postback_password }}">
                                            </div>
                                            </div>

                                            </div>













                                            <div class="row">

                                                <div class="col-md-6">
                                            <div class="input__group mb-25">
                                                <label>{{ __('Payout Rate') }} <span class="text-danger">*</span></label>
                                                <input type="number" id="payout_rate" name="payout_rate" value="{{ $edit->payout_rate }}">
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                            <div class="input__group mb-25">
                                                <label>{{ __('Currency Name') }} <span class="text-danger">*</span></label>
                                                <input type="text" id="currency_name" name="currency_name" value="{{ $edit->currency_name }}">
                                            </div>
                                            </div>

                                            </div>

                                            <div class="row">

                                               <div class="col-md-6">
                                            <div class="input__group mb-25">
                                                <label>{{ __('Currency Logo') }}</label>
                                                <input type="file" class="putImage3 mb-10" name="currency_logo" id="currency_logo" value="{{ $edit->currency_logo }}">
                                                <img src="" id="target3" />
                                            </div>
                                            </div>

                                            </div>











                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update Placement') }}</button>
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
