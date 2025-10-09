@extends('publisher.layout.master', ['menu' => 'conversion'])
@section('title', isset($title) ? $title : 'Publisher Conversion')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')

    <div id="table-url" data-url="{{ route('publisher.conversion') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Conversion List')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Conversion List')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">



            <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-vertical__item bg-style">
                                        <h4 class="mb-25">{{__('Conversion List')}}</h4>




                                        <div class="row mb-3">
    <div class="col-md-3">
        <label>From</label>
        <input type="date" id="from_date" class="form-control">
    </div>
    <div class="col-md-3">
        <label>To</label>
        <input type="date" id="to_date" class="form-control">
    </div>
    <div class="col-md-3 d-flex align-items-end">
        <button id="filter" class="btn btn-primary me-2">Filter</button>
        <button id="reset" class="btn btn-secondary">Reset</button>
    </div>
</div>


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
                        </div>
                    </div>
                </div>




        </div>
    </div>

    <!--Row-->
    @push('post_scripts')
        <script src="{{asset('backend/js/publisher/datatables/conversions.js')}}"></script>
    @endpush
@endsection
