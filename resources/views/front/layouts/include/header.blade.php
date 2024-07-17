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

                    <div class="wishlist single-btn">
                        <a href="{{ route('wishlist') }}" class="wishlist-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-like"></i>
                                <span
                                    class="count wishListCuntFromController">{{ auth()->check() ? wishlistCount() : '0' }}</span>
                            </div>
                            <div class="btn-right">
                                <span class="btn-text">{{ __('Wishlist') }}</span>
                                <span
                                    class="item-count wishListCuntFromController">{{ auth()->check() ? wishlistCount() : '0' }}
                                    {{ __('items') }}</span>
                            </div>
                        </a>
                    </div>


                    <div class="cart single-btn">
                        <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button"
                            aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                            <div class="btn-left">
                                <i class="btn-icon flaticon-shopping-bag"></i>
                                <span class="count totalCountItem">{{ cartCountItem() }}</span>
                            </div>
                            <div class="btn-right">
                                <span class="btn-text">{{ __('Your Cart') }}</span>
                                @php
                                    $content = Cart::content();
                                    $total = 0;
                                @endphp
                                @foreach ($content as $item)
                                    @php
                                        $total += $item->subtotal;
                                    @endphp
                                @endforeach
                                <span class="price totalAmount">
                                    {{ currencyConverter($total) }}</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




</header>