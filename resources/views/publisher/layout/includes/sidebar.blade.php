<div class="sidebar__area">
    <div class="sidebar__close">
        <button class="close-btn">
            <i class="fa fa-close"></i>
        </button>
    </div>
    <div class="sidebar__brand">
        <a href="{{ route('publisher.dashboard') }}">
            <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" alt="icon">
        </a>
    </div>
    <ul id="sidebar-menu" class="sidebar__menu">
        <li class="{{ isset($menu) && $menu == 'dashboard' ? 'mm-active' : '' }}">
            <a href="{{ route('publisher.dashboard') }}">
                <img src="{{ asset('admin/images/icons/sidebar/dashboard.svg') }}" alt="icon">
                <span>{{ __('Dashboard') }}</span>
            </a>
        </li>

        <li class="{{ isset($menu) && $menu == 'offer-gallery' ? 'mm-active' : '' }}">
            <a href="{{ route('publisher.offer-gallery') }}">
                <img src="{{ asset('admin/images/icons/sidebar/gallery.svg') }}" alt="icon">
                <span>{{ __('Offer Gallery') }}</span>
            </a>
        </li>


        <li class="{{ isset($menu) && $menu == 'placements' ? 'mm-active' : '' }}">
            <a href="{{ route('publisher.placements') }}">
                <img src="{{ asset('admin/images/icons/sidebar/app.svg') }}" alt="icon">
                <span>{{ __('App/Placements') }}</span>
            </a>
        </li>



        <li class="{{ isset($menu) && $menu == 'conversion' ? 'mm-active' : '' }}">
            <a href="{{ route('publisher.conversion') }}">
                <img src="{{ asset('admin/images/icons/sidebar/conversion.svg') }}" alt="icon">
                <span>{{ __('Conversion') }}</span>
            </a>
        </li>

        <li class="{{ isset($menu) && $menu == 'reverse' ? 'mm-active' : '' }}">
            <a href="{{ route('publisher.reverse') }}">
                <img src="{{ asset('admin/images/icons/sidebar/reverse.svg') }}" alt="icon">
                <span>{{ __('Reverse') }}</span>
            </a>
        </li>

        <li class="{{ isset($menu) && $menu == 'reports' ? 'mm-active' : '' }}">
            <a href="{{ route('publisher.reports') }}">
                <img src="{{ asset('admin/images/icons/sidebar/report.svg') }}" alt="icon">
                <span>{{ __('Reports') }}</span>
            </a>
        </li>

        <li class="{{ isset($menu) && $menu == 'payments' ? 'mm-active' : '' }}">
            <a href="{{ route('publisher.payments') }}">
                <img src="{{ asset('admin/images/icons/sidebar/payment.svg') }}" alt="icon">
                <span>{{ __('Payments') }}</span>
            </a>
        </li>


        <li class="{{ isset($menu) && $menu == 'account-settings' ? 'mm-active' : '' }}">
            <a href="{{ route('publisher.account-settings') }}">
                <img src="{{ asset('admin/images/icons/sidebar/user.svg') }}" alt="icon">
                <span>{{ __('Account Settings') }}</span>
            </a>
        </li>


        <li class="{{ isset($menu) && $menu == 'postback-docs' ? 'mm-active' : '' }}">
            <a href="{{ route('publisher.documentation') }}">
                <img src="{{ asset('admin/images/icons/sidebar/docs.svg') }}" alt="icon">
                <span>{{ __('Documentation') }}</span>
            </a>
        </li>









    </ul>
</div>
<!-- Sidebar area end -->
