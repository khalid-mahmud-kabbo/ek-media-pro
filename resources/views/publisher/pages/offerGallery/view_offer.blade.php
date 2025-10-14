@extends('publisher.layout.master', ['menu' => 'offer-gallery'])
@section('title', isset($title) ? $title : $offer->name)
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('View Offer')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Offer</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">



                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-vertical__item bg-style">



<div class="offer-header">
                                    <div class="offer-img mb-30 text-center">
                                        <img class="rounded mb-20" src="{{asset($offer->image_url)}}" height="100" width="100" alt="offer">
                                    <h4>{{ $offer->name }}</h4>
                                    </div>

</div>


<hr>


<div class="offer-details-body">

<h4 class="mb-20">Details</h4>


<p><strong>Offer ID:</strong> {{ $offer->offer_id }}</p>
<p><strong>Offer Name:</strong> {{ $offer->name }}</p>
<p><strong>Categories:</strong> {{ is_array($offer->categories) ? implode(', ', $offer->categories) : $offer->categories }}</p>
<p><strong>Payout (USD):</strong> ${{ $offer->payout }}</p>
<p><strong>Amount (Virtual Currency):</strong> {{ $offer->payout }}</p>
<p><strong>Countries:</strong> {{ is_array($offer->countries) ? implode(', ', $offer->countries) : $offer->countries }}</p>
<p><strong>Devices:</strong> {{ is_array($offer->devices) ? implode(', ', $offer->devices) : $offer->devices }}</p>
<p><strong>Operating System:</strong> {{ is_array($offer->os) ? implode(', ', $offer->os) : $offer->os }}</p>
<p><strong>Platforms:</strong> {{ is_array($offer->platforms) ? implode(', ', $offer->platforms) : $offer->platforms }}</p>


<hr>

<h4 class="mb-20">Description</h4>
<p><strong>First Description:</strong></p>
<p>{{ $offer->description1 }}</p>

<p><strong>Second Description:</strong></p>
<p>{{ $offer->description2 }}</p>

<p><strong>Third Description:</strong></p>
<p>{{ $offer->description3 }}</p>



</div>







                                </div>
                                </div>


                                <div class="col-md-8">
                                    <div class="form-vertical__item bg-style">




                                    <h4 class="mb-30">Details</h4>
<hr>
                                    <h5 class="mb-10">Tracking URL</h5>

                                    <div class="offer-track-url">
                                    <p class="text-justify">{{ $offer->click_url }}</p>

                                    </div>


                                    <div class="the-payment-term-box mb-50">
                    <div class="icon-of">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>
                    <div class="details">
                    <h6 class="text-danger">Notes:</h6>
                    <p class="text-success text-justify">Please change the [user_id] text at the end, with your unique and constant User ID in tracking link. You can also send your changing user Click ID or Session ID value by appending the macro &s1= in tracking link. You can find more details on these macros in your App detail page. A new tracking link is generated on each page refresh but all links will work the same.</p>
                    </div>
            </div>




            <h4 class="mb-30">Events</h4>
            <hr>

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









                                </div>


                                </div>






                            </div>












            </div>
        </div>
    </div>
@endsection

