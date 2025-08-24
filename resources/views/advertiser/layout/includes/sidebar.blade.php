<!-- Sidebar area start -->
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
        {{-- @canany(['user-list'])
            <li class="{{ isset($menu) && $menu == 'admins' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-user"></i>
                    <span>{{ __('Admin Manage') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'admin_list' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.admin_list') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Admin List') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany --}}




    </ul>
</div>
<!-- Sidebar area end -->
