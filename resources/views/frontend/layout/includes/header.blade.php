 <header>
                <div class="container">
                    <div class="head one" >
                        <a href="/">
                            <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" alt="logo" class="logo" />
                        </a>
                        <ul class="nav_list ">
                            <li class="nav_item">
                                <a href="/" class="nav_link">
                                    About
                                </a>
                            </li>
                            <li class="nav_item">
                                <a target="_blank" href="#" class="nav_link">
                                    Documentation
                                </a>
                            </li>
                            <li class="nav_item">
                                <a href="#" class="nav_link">
                                    Contact
                                </a>
                            </li>

                            <li class="nav_item phone">
                                <a href="{{ route('login') }}" class="nav_link">
                                    sign in
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="head two">

                        @if (Auth::user())

                        @if (Auth::user()->account_type == 'publisher')
                         <a href="{{ route('publisher.dashboard') }}">
                        <button class="sign_up">
                            <i class="fa-duotone fa-solid fa-user-plus"></i>
                            <span>Dashboard</span>
                        </button>
                        </a>

                        @elseif (Auth::user()->account_type == 'advertiser')
                        <a href="{{ route('advertiser.dashboard') }}">
                        <button class="sign_up">
                            <i class="fa-duotone fa-solid fa-user-plus"></i>
                            <span>Dashboard</span>
                        </button>
                        </a>
                        @endif
                        @else
                        <a href="{{ route('login') }}">
                        <button class="sign_in">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            <span>sign in</span>
                        </button>
                        </a>
                        <a href="{{ route('sign.up') }}">
                        <button class="sign_up">
                            <i class="fa-duotone fa-solid fa-user-plus"></i>
                            <span>sign up</span>
                        </button>
                        </a>
                        @endif

                    </div>
                    <div class="icons">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </header>
