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
        @canany(['user-list'])
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
                    <li class="{{ isset($submenu) && $submenu == 'add_admin' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.create_admin') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Add Admin') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'roles' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.role_list') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Roles') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
        @canany(['category-list', 'brand-list'])
            <li class="{{ isset($menu) && $menu == 'catbad' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-list"></i>
                    <span>{{ __('Category and Brand') }}</span>
                </a>
                <ul>
                    @can('category-list')
                        <li class="{{ isset($submenu) && $submenu == 'category' ? 'mm-active' : '' }}">
                            <a href="{{ route('admin.category') }}">
                                <i class="fa fa-circle"></i>
                                <span>{{ __('Category') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('brand-list')
                        <li class="{{ isset($submenu) && $submenu == 'brand' ? 'mm-active' : '' }}">
                            <a href="{{ route('admin.brand') }}">
                                <i class="fa fa-circle"></i>
                                <span>{{ __('Brand') }}</span>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
        @endcanany


        @canany(['blog-list'])
            <li class="{{ isset($menu) && $menu == 'blog' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.blog') }}">
                    <i class="fab fa-blogger-b"></i>
                    <span>{{ __('Blog') }}</span>
                </a>
            </li>
        @endcanany


        @canany(['cms-list'])
            <li class="{{ isset($menu) && $menu == 'site_content' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-cube"></i>
                    <span>{{ __('CMS') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'general_settings' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.general.settings') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('General Settings') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'content_home' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.home.page.site.content') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Home Page') }}</span>
                        </a>
                    </li>

                </ul>
            </li>
        @endcanany


        @canany(['cms-create', 'cms-edit'])
            <li class="{{ isset($menu) && $menu == 'seo' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-cube"></i>
                    <span>{{ __('SEO Management') }}</span>
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


        @canany(['cms-list'])
            <li class="{{ isset($menu) && $menu == 'sitemap' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.sitemap_list') }}">
                    <i class="fa fa-sitemap"></i>
                    <span>{{ __('Sitemaps') }}</span>
                </a>
            </li>
        @endcanany


    </ul>
</div>
<!-- Sidebar area end -->
