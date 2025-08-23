 <header>
                <div class="container">
                    <div class="head one" >
                        <a href="#home">
                            <img src="{{ asset('assets/images/logo.png')}}" alt="logo" class="logo" />
                        </a>
                        <ul class="nav_list ">
                            <li class="nav_item">
                                <a href="#about-us" class="nav_link">
                                    About
                                </a>
                            </li>
                            <li class="nav_item">
                                <a target="_blank" href="#" class="nav_link">
                                    Documentation
                                </a>
                            </li>
                            <li class="nav_item">
                                <a href="#contact" class="nav_link">
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
                         <a href="{{ route('user.profile') }}" target="_blank">
                        <button class="sign_up">
                            <i class="fa-duotone fa-solid fa-user-plus"></i>
                            <span>Dashboard</span>
                        </button>
                        </a>
                        @else
                        <a href="{{ route('login') }}" target="_blank">
                        <button class="sign_in">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            <span>sign in</span>
                        </button>
                        </a>
                        <a href="{{ route('user.sign.up') }}" target="_blank">
                        <button class="sign_up">
                            <i class="fa-duotone fa-solid fa-user-plus"></i>
                            <span>sign up</span>
                        </button>
                        </a>
                        @endif

                    </div>
                    <div class="icons">
                        <iconify-icon class="menu" icon="hugeicons:menu-03" width="34" height="34"  style="color: #01a8ff"></iconify-icon>
                    </div>
                </div>
            </header>
