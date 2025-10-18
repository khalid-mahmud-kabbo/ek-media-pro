@extends('admin.layout.master', ['menu' => 'offers', 'submenu' => 'fetch_offer'])
@section('title', isset($title) ? $title : 'Fetch Offer')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Fetch Offer')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Admin')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Fetch Offer')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">



            <div class="customers__area bg-style mb-30">







            </div>

        </div>
    </div>
@endsection
