@extends('frontend.layout.iframe')
@section('Iframe')

@section('content')

<div class="container">


<div class="row g-3">
    @foreach ($offers as $offer)
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">

                    <div class="d-flex gap-2">


                        <div class="offer-logo">
                            <img class="rounded" src="{{ asset($offer->image_url) }}" width="100" alt="offer">
                        </div>

                        <div class="card-details">
                    <h5 class="card-title">{{ $offer->name }}</h5>
                    <p class="card-text">{{ $offer->description1 }}</p>


                   <div class="icon-sets d-flex gap-3">
    @foreach($offer->os as $os)
        <div class="icon-box">
            @if($os == 'android')
                <i class="fa-brands fa-android"></i>
            @elseif($os == 'ios')
                <i class="fa-brands fa-apple"></i>
            @elseif($os == 'windows')
                <i class="fa-brands fa-windows"></i>
            @endif
        </div>
    @endforeach
</div>




                    </div>

                    <div class="card-button align-self-center">
                        <div class="col-xs-6" style="float: right">
                         <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#OfferModal{{ $offer->id }}" class="btn btn-md btn-blue">
                    {{ $offer->payout }}
                </a>
                    </div>
                    </div>





                    </div>
                </div>
            </div>
        </div>




        <div class="modal fade" id="OfferModal{{ $offer->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $offer->name }}</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6>Description</h6>
                   <p>{{ $offer->description1 }}</p>

                   <div class="events">

            @if (!empty($offer->events) && count($offer->events) > 0)
    @foreach ($offer->events as $event)
        <div class="event-item mb-30">
            <h6 class="mb-10">{{ $event['name'] }}</h6>

            @if(isset($event['params']['data']) && count($event['params']['data']) > 0)
                <ul>
                    @foreach($event['params']['data'] as $param)
                        <li>
                            <strong>{{ $param['param'] }}:</strong> {{ $param['value'] }}
                            @if(!empty($param['desc']))
                                ({{ $param['desc'] }})
                            @endif
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No parameters found</p>
            @endif

        </div>
    @endforeach
@else
    <div class="event-item mb-30">
        <h6 class="mb-10">No Events Found</h6>
    </div>
@endif

            </div>
                </div>
                <div class="modal-footer">
                    <div class="col-xs-6" style="width: 100% !important;">
                         <a href="{{ $offer->click_url }}"  style="width: 100% !important;" class="btn btn-md btn-blue">
                   Continue & Earn {{ $offer->payout }} points
                </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>





        </div>




        <div class="modal fade" id="OfferHistoryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('Earning History') }}</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6>Description</h6>

                </div>
            </div>
        </div>
    </div>



@endsection

