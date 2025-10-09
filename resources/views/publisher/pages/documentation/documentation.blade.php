@extends('publisher.layout.master', ['menu' => 'documentation'])
@section('title', isset($title) ? $title : 'Publisher Documentation')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Documentation')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Documentation')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">

                <h4 class="mb-20">Publisher Documentation</h4>
                <p class="mb-30">{{__('You can find all the documentation links below and all necessary credentials in the individual App Details page from App Details menu.')}}</p>





                 <div class="customers__area bg-style mb-30">

                <h5 class="mb-20">Documentation Links</h5>




                <a href="{{ route('documentation.all-offers-api') }}" target="_blank" class="link-box">
                    <div class="icon">
                        <i class="fa fa-link"></i>
                    </div>
                    <div class="details">
                        <h6>API Documentation = All Offers</h6>
                        <p>All offers api for publishers <i class="fa-solid fa-arrow-up-right-from-square"></i></p>
                    </div>
                </a>


                <a href="{{ route('documentation.filtered-offers-api') }}" target="_blank" class="link-box">
                    <div class="icon">
                        <i class="fa fa-link"></i>
                    </div>
                    <div class="details">
                        <h6>API Documentation = Filtered Offers</h6>
                        <p>Filtered offers api for publishers, with params <i class="fa-solid fa-arrow-up-right-from-square"></i></p>
                    </div>
                </a>


                <a href="{{ route('documentation.user-based-offers-api') }}" target="_blank" class="link-box">
                    <div class="icon">
                        <i class="fa fa-link"></i>
                    </div>
                    <div class="details">
                        <h6>API Documentation = User Based Surveys</h6>
                        <p>All Surveys based on user data api for publishers <i class="fa-solid fa-arrow-up-right-from-square"></i></p>
                    </div>
                </a>


                <a href="{{ route('documentation.top-conversion-offers-api') }}" target="_blank" class="link-box">
                    <div class="icon">
                        <i class="fa fa-link"></i>
                    </div>
                    <div class="details">
                        <h6>API Documentation = Top Converting Offers</h6>
                        <p>Top trending offers api for publishers <i class="fa-solid fa-arrow-up-right-from-square"></i></p>
                    </div>
                </a>


                <a href="{{ route('documentation.iframe-integration') }}" target="_blank" class="link-box">
                    <div class="icon">
                        <i class="fa fa-link"></i>
                    </div>
                    <div class="details">
                        <h6>Iframe Documentation</h6>
                        <p>Iframe Integration document for publishers <i class="fa-solid fa-arrow-up-right-from-square"></i></p>
                    </div>
                </a>


                <a href="{{ route('documentation.postback-integration') }}" target="_blank" class="link-box">
                    <div class="icon">
                        <i class="fa fa-link"></i>
                    </div>
                    <div class="details">
                        <h6>Postback Documentation</h6>
                        <p>Documentation to implement Postbacks in Publishers <i class="fa-solid fa-arrow-up-right-from-square"></i></p>
                    </div>
                </a>







            </div>







            </div>
        </div>
    </div>
@endsection

