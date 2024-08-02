<!-- mobile-menu-area area start here  -->
<div class="offcanvas offcanvas-start menu-offcanvas" tabindex="-1" id="offcanvasMobileMenu">
    <div class="mobile-menu-area">
        <div class="offcanvas-header">
            <a class="brand-logo" href="{{ route('front') }}"><img class="brand-image"
                    src="{{ asset(IMG_LOGO_PATH . $allsettings['main_logo']) }}"
                    alt="{{ $allsettings['app_title'] }}" /></a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="menu-search-form">
            <form>
                <div class="search-wrap">
                    <select class="form-select">
                        <option selected>{{ __('Category') }}</option>
                        @foreach (Category() as $item)
                            <option value="{{ route('category.product', $item->id) }}">
                                {{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobilesearch" name="search"
                            placeholder="{{ __('Search Here') }}" />
                        <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <nav class="main-menu">
            <ul class="menu-list">
                <li class="menu-item"><a class="menu-link"
                        href="{{ route('front') }}">{{ staticMenuName('home') }}</a></li>
                <li class="menu-item">
                    <span class="menu-expand"></span>
                    <a class="menu-link" href="#">{{ staticMenuName('shop') }}</a>
                    <ul class="sub-menu">
                        @foreach (Category() as $item)
                            <li class="sub-menu-item"><a class="sub-menu-link"
                                    href="{{ route('category.product', $item->id) }}">{{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @foreach ($all_menus as $menu)
                    @if ($menu->submenus->count() == 0)
                        <li class="menu-item"><a class="menu-link"
                                href="{{ $menu->url }}">{{ langConverter($menu->en_name, $menu->fr_name) }}</a>
                        </li>
                    @else
                        <li class="menu-item">
                            <span class="menu-expand"></span>
                            <a class="menu-link"
                                href="#">{{ langConverter($menu->en_name, $menu->fr_name) }}</a>
                            <ul class="sub-menu">
                                @foreach ($menu->submenus as $submenu)
                                    <li class="sub-menu-item"><a class="sub-menu-link"
                                            href="{{ $submenu->url }}">{{ langConverter($submenu->en_name, $submenu->fr_name) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
                <li class="menu-item"><a class="menu-link"
                        href="{{ route('about.us') }}">{{ staticMenuName('about-us') }}</a></li>
                <li class="menu-item"><a class="menu-link"
                        href="{{ route('blog') }}">{{ staticMenuName('blog') }}</a></li>
                <li class="menu-item"><a class="menu-link"
                        href="{{ route('contact.us') }}">{{ staticMenuName('contact') }}</a></li>

            </ul>
        </nav>
        <div class="menu-bottom">
            @if (Auth::user())
                @if (Auth::user()->is_admin == ACTIVE)
                    <a class="account-btn mb-3" href="{{ route('admin.dashboard') }}"><i
                            class="user-icon flaticon-user"></i> {{ __('Dashboard') }}</a>
                @else
                    <a class="account-btn mb-3" href="{{ route('user.profile') }}"><i
                            class="user-icon flaticon-user"></i> {{ __('Profile') }}</a>
                @endif
                <a class="account-btn mb-3" href="{{ route('user.logout') }}"><i class="user-icon flaticon-user"></i>
                    {{ __('Logout') }}</a>
            @else
                <a class="account-btn" href="{{ route('login') }}"><i class="user-icon flaticon-user"></i>
                    {{ __('My Account') }} </a>
            @endif
        </div>
    </div>
</div>
<!-- mobile-menu-area area end here  -->
