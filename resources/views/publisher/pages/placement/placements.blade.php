@extends('publisher.layout.master', ['menu' => 'placements', 'submenu' => 'my_placements'])
@section('title', isset($title) ? $title : 'Publisher Placements')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')

    <div id="table-url" data-url="{{ route('publisher.placements') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Publisher Placements')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Placements')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">



            <div class="customers__area bg-style mb-30">

               <div class="item-title">
                    <div class="col-xs-6">
                        <a href="{{route('publisher.create-placement')}}" class="btn btn-md btn-blue">{{ __('Create Placement')}}</a>
                    </div>
                </div>

<table id="PlacementsTable" class="row-border data-table-filter table-style">

                        <thead>
                        <tr>
                            <th>{{ __('App Name')}}</th>
                            <th>{{ __('API Key')}}</th>
                            <th>{{ __('Payout Rate')}}</th>
                            <th>{{ __('Status')}}</th>
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
        <script src="{{asset('backend/js/publisher/datatables/placements.js')}}"></script>
    @endpush
@endsection
