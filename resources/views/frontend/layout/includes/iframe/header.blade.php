<header class="iframe-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">

                <div class="logo">
                    <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" width="200" alt="logo" />
                </div>

            </div>

            <div class="col-lg-4">
                <div class="d-flex justify-content-between">
    <a href="{{ request()->fullUrlWithQuery(['filter' => 'all']) }}" class="icon-boxer {{ request('filter') == 'all' ? 'active' : '' }}">
        <i class="fa-solid fa-globe"></i>
    </a>
    <a href="{{ request()->fullUrlWithQuery(['filter' => 'android']) }}" class="icon-boxer {{ request('filter') == 'android' ? 'active' : '' }}">
        <i class="fa-brands fa-android"></i>
    </a>
    <a href="{{ request()->fullUrlWithQuery(['filter' => 'ios']) }}" class="icon-boxer {{ request('filter') == 'ios' ? 'active' : '' }}">
        <i class="fa-brands fa-apple"></i>
    </a>
    <a href="{{ request()->fullUrlWithQuery(['filter' => 'windows']) }}" class="icon-boxer {{ request('filter') == 'windows' ? 'active' : '' }}">
        <i class="fa-brands fa-windows"></i>
    </a>
</div>


            </div>

            <div class="col-lg-4">

                    <div class="col-xs-6" style="float: right">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#OfferHistoryModal" class="btn btn-md btn-blue" >{{ __('Earning History')}}</a>
                    </div>

            </div>
        </div>
        <hr>
        <p class="text-danger">use of VPN, Proxy, Bots, Emulators and anomalies not ALLOWED. Use of these will result in getting blocked.</p>
    </div>
</header>
