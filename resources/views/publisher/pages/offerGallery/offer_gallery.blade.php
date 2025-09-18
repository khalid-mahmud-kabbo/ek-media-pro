@extends('publisher.layout.master', ['menu' => 'offer-gallery'])
@section('title', isset($title) ? $title : 'Publisher Offer Gallery')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')

    <div id="table-url" data-url="{{ route('publisher.offer-gallery') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Offer Gallery')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Offer Gallery')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">


                                        <h4 class="mb-25">Live Offers</h4>

<div id="table-url" data-url="{{ route('publisher.offer-gallery') }}"></div>

<table id="OffersTable" class="row-border data-table-filter table-style">
                        <thead>
                        <tr>
                            <th>{{ __('Icon')}}</th>
                            <th>{{ __('Offer ID')}}</th>
                            <th>{{ __('Offer Name')}}</th>
                            <th>{{ __('Category')}}</th>
                            <th>{{ __('Devices')}}</th>
                            <th>{{ __('Platforms')}}</th>
                            <th>{{ __('Countries')}}</th>
                            <th>{{ __('OS')}}</th>
                            <th>{{ __('Payout ($)')}}</th>
                            <th>{{ __('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>






            </div>
        </div>
    </div>
    <!--Row-->
    @push('post_scripts')
        <script src="{{asset('backend/js/publisher/datatables/offers.js')}}"></script>
    @endpush
@endsection

