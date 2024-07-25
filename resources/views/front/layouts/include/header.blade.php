<header class="for-desktop header-area">
   
    <div class="header-middle">
        <div class="container">
            <div class="header-middle-wrap">
                <div class="brand-area">
                    <a class="brand-logo" href="{{ route('front') }}"><img class="brand-image"
                            src="{{ asset(IMG_LOGO_PATH . $allsettings['main_logo']) }}"
                            alt="{{ $allsettings['app_title'] }}" /></a>
                </div>
                <div class="search-area">
                    <form action="{{ route('category.search') }}" method="get">
                        <div class="search-wrap">
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" name="search"
                                    placeholder="{{ __('Search Here') }}" />
                                <button type="submit" class="search-btn"><i
                                        class="flaticon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="header-right">
                    @if (Auth::user())
                    <div class="wishlist single-btn">

                        @if (Auth::user()->is_admin == ACTIVE)
                                <a class="wishlist-btn header-btn" href="{{ route('admin.dashboard') }}">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-user text-white"></i>
                                    </div>
                                </a>
                                        
                        @else
                                <a class="wishlist-btn header-btn" href="{{ route('user.profile') }}">
                                    <div class="btn-left">
                                        <i class="btn-icon flaticon-user text-white"></i>
                                    </div>
                                </a>
                                          
                        @endif


                    </div>
                    @else
                    <div class="wishlist single-btn">
                    <a href="{{ route('login') }}" class="wishlist-btn header-btn">
                        <div class="btn-left">
                            <i class="btn-icon flaticon-user text-white"></i>
                        </div>
                        
                    </a>
                </div>

                    @endif

                    








                    <div class="wishlist single-btn">
                        <a href="{{ route('wishlist') }}" class="wishlist-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-like text-white"></i>
                                <span
                                    class="count wishListCuntFromController">{{ auth()->check() ? wishlistCount() : '0' }}</span>
                            </div>
                           
                        </a>
                    </div>


                    <div class="cart single-btn">
                        <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button"
                            aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-shopping-bag text-white"></i>
                                <span class="count totalCountItem">{{ cartCountItem() }}</span>
                            </div>
                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




</header>