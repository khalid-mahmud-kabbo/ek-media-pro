@extends('frontend.layout.iframe')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')


<div class="app-main" >
    <div style="padding: 20px 15px 5px 15px;" >
    <div style="position: relative; display: inline-block;">
  <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" width="120px">
</div>

    <span style="float: right;">
        @if($detectedCountry && $detectedCountryCode)
        <button class="badge bg-faded-primary text-primary">
            <img src="https://flagcdn.com/48x36/{{ $detectedCountryCode }}.png" style="height: 20px;">
        </button>
        @endif
        </span>

     </div>
        <div class="row" style="text-align: center; border-bottom: 2px solid #133684; padding: 5px; border-top: 2px solid #133684;">
          <div class="col-4" role="presentation" style=" text-align: center;">
          <button style="width: 100%" class="btn btn-blue dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Short <img src="{{ asset('assets/images/filter.svg') }}" style="width: 20px"></button>
              <div class="dropdown-menu">
                <a class="dropdown-item offerSort" href="javascript:void(0)" id="low"><i class="fa fa-sort-amount-up"></i> Low to High</a>
                <hr>
                <a class="dropdown-item offerSort" href="javascript:void(0)" id="high"><i class="fa fa-sort-amount-down"></i> High to Low</a>
              </div>
          </div>
          <div class="col-4" role="presentation" style=" text-align: center;">
          <button style="width: 100%" class="btn btn-blue dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Search <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="#fff" d="M4 4a1 1 0 0 0 0 2h16a1 1 0 1 0 0-2zm-1 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1m0 7a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1m7-5a5 5 0 1 1 9.172 2.757l1.535 1.536a1 1 0 0 1-1.414 1.414l-1.536-1.535A5 5 0 0 1 10 14m5-3a3 3 0 1 0 0 6a3 3 0 0 0 0-6"/></g></svg></button>
              <div class="dropdown-menu border-info" style="width: 65%; text-align: center; padding: 0; margin-top: -10px">
                <input type="search" placeholder="Search..." class="form-control" id="search-input" onkeyup="search()">
              </div>
          </div>
          <div class="col-4" role="presentation"  style=" text-align: center;">
             <button href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#OfferHistoryModal" style="width: 100%" class="btn btn-blue">History  <img src="{{ asset('assets/images/success.svg') }}" style="width: 20px" ></button>
          </div>
        </div>









    <div class="content-wrapper" style="background-color: #112242;">
        <section id="offersContent" class="main-content index tab-content" style="margin-bottom: 130px;">
        <main id="main-content" class=" grid grid-cols-1 sm:grid-cols-2 container ">
          <div id="offers-ajax">





            @foreach ($offers as $offer)

                <div class="offer-item target col-span-2 lg:col-span-4 sm:col-span-1 search-block campaign-block" data-name="{{ strtolower($offer->name) }}" data-payout="{{ $offer->payout }}">



	    <div class="local-offers dark col-span-2 sm:col-span-3 mb-2 mt-2 shadow-dark">
	        <div class="relative flex  flex-col justify-between overflow-hidden rounded-[5px] bg-white dark">
	            <div class="flex h-[100px] space-x-[12px] p-[10px]">
						<div class="flex items-center justify-center overflow-hidden rounded-[4px] bg-white">
							<img src="{{ asset($offer->image_url) }}" class="img-fluid" style="width: 60px; height: 60px; border-radius: 15px; " loading="lazy">
						</div>
						<div class="flex flex-1 flex-col">
							<div class="my-auto">
								<div class="break-all text-[14px] font-semibold leading-[17px] text-[#334D6E] line-clamp-1 sm:text-[15px] sm:leading-[20px] dark campaign-title">{{ $offer->name }}</div>
								<div class="text-[12px] font-normal leading-[14px] text-[#8CA0BA] line-clamp-1 sm:text-[13px] sm:leading-[16px] dark">{{ $offer->description1 }}</div>

                                <div class="flex items-center space-x-[5px] mt-1">
                                    @foreach($offer->os as $os)

                                    @if($os == 'windows')
									<span class="badge bg-faded-primary text-dark" style="border-radius:0.4rem;"><i class="fa fa-desktop"></i></span>

                                    @elseif($os == 'android')
                                    <span class="badge bg-faded-success text-success" style="border-radius:0.4rem;"><i class="fab fa-android"></i></span>

                                    @elseif($os == 'ios')
                                    <span class="badge bg-faded-primary text-primary" style="border-radius:0.4rem;"><i class="fab fa-apple"></i></span>
                                @endif

                                @endforeach
                            </div>

								<span style="border-radius:0.4rem; margin-top: 2px" class="badge bg-faded-danger text-danger">Most Popular 🔥</span>
								<span style="border-radius:0.4rem; margin-top: 2px" class="badge bg-faded-warning text-warning">MultiReward</span>
							</div>
						</div>
						<div class="right-payout-btn" style="margin-top: 6px">
							<button
    class="m-auto text-[13px] leading-[19px] text-white"
    style="width: 70px; height: 70px; border-radius: 5px; padding: 2px; background: #133684;"
    data-bs-toggle="modal"
    data-bs-target="#OfferModal{{ $offer->id }}">

    <span class="font-bold">
        <label>
            <img src="{{ asset('assets/images/coin.png') }}" style="width: 15px; margin-top: -5px">
        </label><br>
        <span style="font-size: 12px">{{ $offer->adjusted_payout ? $offer->adjusted_payout : $offer->payout }}</span><br>
        <span style="font-size: 10px; margin-right: 3px">UP-TO</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="7.5" height="10" viewBox="0 0 384 512">
            <path fill="#f2f402"
                d="M350 177.5c3.8-8.8 2-19-4.6-26l-136-144C204.9 2.7 198.6 0 192 0s-12.9 2.7-17.4 7.5l-136 144c-6.6 7-8.4 17.2-4.6 26S46.5 192 56 192h88v192c0 17.7-14.3 32-32 32H32c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h80c70.7 0 128-57.3 128-128V192h88c9.6 0 18.2-5.7 22-14.5"/>
        </svg>
    </span>
</button>

						</div>
					</div>
	        </div>
	    </div>
	</div>




 <div class="modal fade" id="OfferModal{{ $offer->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-lg-down" role="document">
            <div class="modal-content" style="padding: 0px;">
                <div class="modal-body" style="margin-top: -40px; padding: 0px !important;">

<div class="dark col-span-2 sm:col-span-3 mb-2 mt-2" data-toggle="modal" data-target="#show-modal">
                    <div class="relative flex  flex-col justify-between overflow-hidden rounded-[5px] bg-white dark">
                      <span style="text-align: right; margin: 30px; float: right; position: relative; z-index: 1000;"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                      </button></span>
                      <div class="blurred-background">
                        <div class="conteant">
                          <img src="{{ asset($offer->image_url) }}" alt="" id="offer-cover" style="width: 500px">
                        </div>
                      </div>

                      <div style="padding: 30px 10px; margin-top: -30px">
                        <div class="flex h-[100px] space-x-[12px] p-[10px]">
                          <img src="{{ asset($offer->image_url) }}" class="img-fluid" alt="" id="offer-img" style="width: 70px; height: 70px; border-radius: 20px">
                          <div class="flex flex-1 flex-col" style="margin-top: -20px">
                            <div class="my-auto">
                              <div class="break-all text-[14px] font-semibold leading-[17px] text-[#334D6E] line-clamp-1 sm:text-[16px] sm:leading-[20px] dark">
                                <div id="offer-name">{{ $offer->name }}</div>
                              </div>
                              <div class="text-[12px] font-normal leading-[14px] text-[#8CA0BA] line-clamp-1 sm:text-[14px] sm:leading-[16px] dark">
                                <div id="des_point">{{ $offer->description1 }}</div>
                              </div>
                              <div class="flex items-center space-x-[5px] mt-1">
                              <span style="border-radius:0.4rem;" class="badge bg-faded-success text-success border border-success">New Users</span>
                              <span style="border-radius:0.4rem;" class="badge bg-faded-info text-info border border-info" id="taskid">{{ $offer->payout }}</span>
                            </div>
                            </div>

                          </div>
                        </div>
                        <a target="_blank" href="{{ $offer->click_url }}" id="offer-link" class="btn btn-blue w-100" style="border-radius: 2px; font-size: 16px; border: none; padding: 10px">Let's Go &amp; Earn <div id="coin-name" style="margin-left: 5px"></div></a>
                        <div class="col-span-2 sm:col-span-3 mb-2 mt-4 " style="padding: 20px">
                          <p style="color:#576071" class="fs-6 mt-2 fw-bold"> Description</p>
                          <small class=" mb-3 fs-sm" style="color:#576071; font-weight:400;">
                            <div id="lead_point">{{ $offer->description1 }}</div>
                            <br>


          <ul id="mutlireward-div" class="timeline" style="width: 100%;">

    @if (!empty($offer->events) && count($offer->events) > 0)
        @foreach ($offer->events as $event)
            <li class="timeline-item">
                <div class="timeline-body">
                    <div class="timeline-content">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <span class="card-title mb-3">
                                    {{ $event['name'] }}<br>

                                    {{-- Check if event has params --}}
                                    @if(isset($event['params']['data']) && count($event['params']['data']) > 0)
                                        @foreach($event['params']['data'] as $param)
                                            <span class="coins-ele">
                                                {{ $param['param'] }}:
                                                {{ $param['value'] }}
                                                @if(!empty($param['desc']))
                                                    ({{ $param['desc'] }})
                                                @endif
                                            </span><br>
                                        @endforeach
                                    @else
                                        <span class="text-muted">No parameters found</span><br>
                                    @endif
                                </span>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    @else
        <li class="timeline-item">
            <div class="timeline-body">
                <div class="timeline-content text-center">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <span class="card-title mb-3">No Events Found</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    @endif

</ul>






                          </small>
                          <br><br>

                          <center>
                            <h4 style="color:#576071">Scan Code on Other Device</h4>
                            <div id="qrcode"></div>
                          </center>
                          <hr>
                          <p style="color:#576071" class="fs-6 mt-2 fw-bold" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Eligibility Terms <i class="ri-arrow-down-line"></i></p>

                          <div id="collapseExample">
                            <ul class="fs-sm">
                              <li style="color:#576071; font-weight:500;" class="fs-sm">Using a VPN/Proxy is prohibited. </li>
                              <li style="color:#576071; font-weight:500;" class="fs-sm">Using an emulator of any kind is prohibited. </li>
                              <li style="color:#576071; font-weight:500;" class="fs-sm">You must start and complete the offer from the same device and location. </li>
                              <li style="color:#576071; font-weight:500;" class="fs-sm">You must be a new user. </li>
                            </ul>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>


                </div>
            </div>
        </div>
    </div>



@endforeach



<br>
</div>



        </main>
      </section>
</div>




  </div>











  <div class="modal fade" id="OfferHistoryModal" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-fullscreen-lg-down" role="document">
            <div class="modal-content" style="padding: 0px;">


          <div class="modal-content">
              <div class="modal-header" style="margin-top: -20px">
              <h5 class="modal-title" id="exampleModalLabel"><br>History</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body" style="padding: 0px 20px" id="completed-offers-data">

                <div class="target col-span-2 lg:col-span-4  sm:col-span-1 search-block campaign-block" id="parent">




			<div class=" dark col-span-2 sm:col-span-3 mb-2 mt-2 shadow-dark">
				<div class="relative flex  flex-col justify-between overflow-hidden rounded-[5px] bg-white dark">
					<div class="flex h-[100px] space-x-[12px] p-[10px]">
						<div class="flex items-center justify-center overflow-hidden rounded-[4px] bg-white">
							<img src="http://ziecash.com/styles/images/favicon.png" class="img-fluid" style="width: 60px; height: 60px; border-radius: 15px; ">
						</div>
						<div class="flex flex-1 flex-col">
							<div class="my-auto">
								<div class="break-all text-[14px] font-semibold leading-[17px] text-[#334D6E] line-clamp-1 sm:text-[15px] sm:leading-[20px] dark campaign-title">ziecash.com</div>
								<div class="text-[12px] font-normal leading-[14px] text-[#8CA0BA] line-clamp-1 sm:text-[13px] sm:leading-[16px] dark">7 Seconds ago <span style="border-radius:0.4rem; margin-top: 2px" class="badge bg-faded-info text-info">#67412626</span></div>
								<div class="flex items-center space-x-[5px] mt-1">
								    <span style="border-radius:0.4rem; margin-top: 2px" class="badge bg-faded-warning border border-warning text-warning">Waiting for Completion... <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path fill="#ffe9a9" d="M12,4a8,8,0,0,1,7.89,6.7A1.53,1.53,0,0,0,21.38,12h0a1.5,1.5,0,0,0,1.48-1.75,11,11,0,0,0-21.72,0A1.5,1.5,0,0,0,2.62,12h0a1.53,1.53,0,0,0,1.49-1.3A8,8,0,0,1,12,4Z"><animateTransform attributeName="transform" dur="0.45s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"></animateTransform></path></svg></span>

								</div>
							</div>
						</div>
						<div class="right-payout-btn" style="margin-top: 30px">
							<button class="m-auto text-[13px] leading-[19px] text-white bg-light-warning" style="width: 70px; height: 30px; border-radius: 5px; padding: 2px; background: #6c757d">
								<span class="font-bold" style="font-size: 11px">
									Pending...
								</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
        </div>
          </div>
        </div>
        </div>
    </div>
@endsection

