@extends('publisher.layout.master', ['menu' => 'reports'])
@section('title', isset($title) ? $title : 'Publisher Reports')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')

    <div id="table-url" data-url="{{ route('publisher.placements') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Reports')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Reports')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>



     <div class="row">
        <!-- Statistics -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__("Earnings")}}</h2>
                    <div class="status__box__data">
                        <h2>0</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-dollar-sign fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__("Conversions")}}</h2>
                    <div class="status__box__data">
                        <h2>0</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-dollar-sign fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__("Clicks")}}</h2>
                    <div class="status__box__data">
                        <h2>0</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-chart-bar fa-2x text-success"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="status__box-3 bg-style">
                <div class="item__left">
                    <h2>{{__("EPC")}}</h2>
                    <div class="status__box__data">
                        <h2>0</h2>
                    </div>
                </div>
                <div class="item__right">
                    <div class="status__box__img">
                        <i class="fas fa-chart-bar fa-2x text-success"></i>
                    </div>
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
                                        <h4 class="mb-25">{{__('Reverse List')}}</h4>




                                        <div class="row mb-3">
    <div class="col-md-3">
        <label>Select App</label>
        <select id="app_id" class="form-control">
            <option value="all">Metreward</option>
            <option value="all">nex</option>
            <option value="all">finch</option>
        </select>
    </div>
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
    {{-- @push('post_scripts')
        <script src="{{asset('backend/js/publisher/datatables/placements.js')}}"></script>
    @endpush --}}
@endsection
