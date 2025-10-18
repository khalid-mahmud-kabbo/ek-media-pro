@extends('admin.layout.master', ['menu' => 'advertisers', 'submenu' => 'create_advertiser'])
@section('title', isset($title) ? $title : 'Create Advertiser')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Create Advertiser')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Admin')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Create Advertiser')}}</li>
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
