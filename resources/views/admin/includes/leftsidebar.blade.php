<!-- Sidebar area start -->
<div class="sidebar__area">
    <div class="sidebar__close">
        <button class="close-btn">
            <i class="fa fa-close"></i>
        </button>
    </div>
    <div class="sidebar__brand">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" alt="icon">
        </a>
    </div>
    <ul id="sidebar-menu" class="sidebar__menu">
        <li class="{{ isset($menu) && $menu == 'dashboard' ? 'mm-active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('admin/images/icons/sidebar/dashboard.svg') }}" alt="icon">
                <span>{{ __('Dashboard') }}</span>
            </a>
        </li>



         <li class="{{ isset($menu) && $menu == 'offers' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fa-solid fa-atom"></i>
                    <span>{{ __('Manage Offers') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'create_offer' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.offers.create') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Create Offer') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'fetch_offer' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.offers.fetch-offers') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Fetch Offers') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'offers_providers' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.offers.offers-providers') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Offer Providers') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'offers' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.offers.index') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Offers List') }}</span>
                        </a>
                    </li>
                </ul>
            </li>


             <li class="{{ isset($menu) && $menu == 'advertisers' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-user"></i>
                    <span>{{ __('Manage Advertisers') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'create_advertiser' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.advertiser.create') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Create Advertiser') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'advertisers' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.advertiser.index') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Advertiser List') }}</span>
                        </a>
                    </li>
                </ul>
            </li>

             <li class="{{ isset($menu) && $menu == 'publishers' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-user"></i>
                    <span>{{ __('Manage Publishers') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'create_publisher' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.publishers.create') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Create Publisher') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'publishers' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.publishers.index') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Publisher List') }}</span>
                        </a>
                    </li>
                </ul>
            </li>



            <li class="{{ isset($menu) && $menu == 'finances' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-user"></i>
                    <span>{{ __('Manage Finance') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'deposits' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.finances.deposits') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Deposits') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'withdrawals' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.finances.withdrawals') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Withdrawals') }}</span>
                        </a>
                    </li>
                </ul>
            </li>


             <li class="{{ isset($menu) && $menu == 'reports' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-user"></i>
                    <span>{{ __('Manage Reports') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'publisher-reports' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.reports.publisher-reports') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Publisher Reports') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'advertiser-reports' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.reports.advertiser-reports') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Advertiser Reports') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'offer-reports' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.reports.offer-reports') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Offer Reports') }}</span>
                        </a>
                    </li>

                    <li class="{{ isset($submenu) && $submenu == 'deposit-reports' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.reports.deposit-reports') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Deposit Reports') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'withdrawal-reports' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.reports.withdrawal-reports') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Withdrawal Reports') }}</span>
                        </a>
                    </li>

                    <li class="{{ isset($submenu) && $submenu == 'credit-reports' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.reports.credit-reports') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Credit Reports') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'chargeback-reports' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.reports.chargeback-reports') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Chargeback Reports') }}</span>
                        </a>
                    </li>
                </ul>
            </li>





             <li class="{{ isset($menu) && $menu == 'supports' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-user"></i>
                    <span>{{ __('Manage Support') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'live-chat' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.supports.live-chat') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Live Chat') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'tickets' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.supports.tickets') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Tickets') }}</span>
                        </a>
                    </li>
                </ul>
            </li>


             <li class="{{ isset($menu) && $menu == 'admins' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-user"></i>
                    <span>{{ __('Manage Staff') }}</span>
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




        @canany(['cms-list'])
            <li class="{{ isset($menu) && $menu == 'site_content' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-cube"></i>
                    <span>{{ __('Manage Website') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'general_settings' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.general.settings') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('General Settings') }}</span>
                        </a>
                    </li>



                     <li class="{{ isset($menu) && $menu == 'blog' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.blog') }}">
                    <i class="fab fa-blogger-b"></i>
                    <span>{{ __('Blog') }}</span>
                </a>
            </li>

            <li class="{{ isset($menu) && $menu == 'sitemap' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.sitemap_list') }}">
                    <i class="fa fa-sitemap"></i>
                    <span>{{ __('Sitemaps') }}</span>
                </a>
            </li>

                </ul>
            </li>
        @endcanany


        @canany(['cms-create', 'cms-edit'])
            <li class="{{ isset($menu) && $menu == 'seo' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-cube"></i>
                    <span>{{ __('Manage SEO') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'home' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'home') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Home') }}</span>
                        </a>
                    </li>

                    <li class="{{ isset($submenu) && $submenu == 'blog' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'blog') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Blog') }}</span>
                        </a>
                    </li>

                </ul>
            </li>
        @endcanany




    </ul>
</div>
<!-- Sidebar area end -->
