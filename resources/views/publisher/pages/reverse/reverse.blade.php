@extends('publisher.layout.master', ['menu' => 'reverse'])
@section('title', isset($title) ? $title : 'Publisher Reverse')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')

    <div id="table-url" data-url="{{ route('publisher.placements') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Reverse List')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Reverse List')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">



            <div class="customers__area bg-style mb-30">
<table id="ConversionsTable" class="row-border data-table-filter table-style">

                        <thead>
                        <tr>
                            <th>{{ __('ID')}}</th>
                            <th>{{ __('Placement')}}</th>
                            <th>{{ __('USERID')}}</th>
                            <th>{{ __('Offer')}}</th>
                            <th>{{ __('Payout')}}</th>
                            <th>{{ __('Date')}}</th>
                            <th>{{ __('IP Address')}}</th>
                            <th>{{ __('Status')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
            </div>

        </div>
    </div>

    <!--Row-->
    {{-- @push('post_scripts')
        <script src="{{asset('backend/js/publisher/datatables/placements.js')}}"></script>
    @endpush --}}
@endsection
