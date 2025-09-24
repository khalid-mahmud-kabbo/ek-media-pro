@extends('frontend.layout.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')
            <section class="home" id="home">
                <div class="container">
                    <div class="home_txt">
                        <h1 class="maintitle">
                            Maximize revenue from your traffic.
                        </h1>
                        <h2 class="subtitle">
                            Integrate engaging and effortless rewarded surveys into your app or website now and tap into the future of monetization.
                        </h2>
                        <a href=""><button class="main_btn">get started</button></a>
                    </div>
                    <div class="home_img" data-aos="flip-left">
                        <img src="{{ asset('assets/images/landing-image.svg')}}" alt="image" />
                    </div>
                    <div class="props" style="margin: auto; width: 50%; padding: 10px;">
                        <div class="prop">
                            <img src="{{ asset('assets/images/check.svg')}}" alt="icon" />
                            <span>High quality offers.</span>
                        </div>
                        <div class="prop">
                            <img src="{{ asset('assets/images/check.svg')}}" alt="icon" />
                            <span>High payout offers</span>
                        </div>
                        <div class="prop">
                            <img src="{{ asset('assets/images/check.svg')}}" alt="icon" />
                            <span>Smoothly direct users to offers.</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Landing End -->

            <!-- AboutUs Start -->
            <section class="about" id="about">
                <div class="container">
                    <h1 class="about_title">
                        Enhancing your app <span style="font-weight: bold">business.</span>
                    </h1>
                    <h3 class="about_subtitle">
                        Concentrating solely on success to accelerate your growth.
                    </h3>
                    <center><p style="font-size: 28px; font-weight: 400px; padding: 10px">Publishers <span style="font-weight: bold; color: #00a8ff">Tools.</span></p></center>
                    <div class="user">

                        <div class="user_props">
                            <div class="user_prop">
                                <iconify-icon icon="mdi:iframe-brackets-outline" width="48" height="48"  style="color: #00a8ff"></iconify-icon>
                                <div class="prop_txt">
                                    <h3 class="prop_title">
                                        iFrame
                                    </h3>
                                    <h4 class="prop_desc">
                                        Add an iframe to your web and reward your users, monetize your traffic.
                                    </h4>
                                </div>
                            </div>
                            <div class="user_prop">
                                <iconify-icon icon="mdi:api" width="48" height="48"  style="color: #00a8ff"></iconify-icon>
                                <div class="prop_txt">
                                    <h3 class="prop_title">
                                        Offers API
                                    </h3>
                                    <h4 class="prop_desc">
                                        Seamlessly integrate offers into your system using the Offers API.
                                    </h4>
                                </div>
                            </div>
                            <div class="user_prop">
                                <iconify-icon icon="ri:link" width="48" height="48"  style="color: #00a8ff"></iconify-icon>
                                <div class="prop_txt">
                                    <h3 class="prop_title">
                                        Offerwall Link
                                    </h3>
                                    <h4 class="prop_desc">
                                        Get a flexible and integrated wall link with offers
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="user_image">
                            <img
                                src="{{ asset('assets/images/monetization-illustration.svg')}}"
                                alt="userAcuisition"
                                width="200px"
                            />
                        </div>
                    </div>

                    <div class="app">
                        <div class="app_image">
                            <img
                                src="{{ asset('assets/images/500-bg.webp')}}"
                                alt="app"
                            />
                        </div>
                        <div class="app_props">
                            <div class="app_prop">
                                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24"><path fill="none" stroke="#049adf" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h3m6-9v3M7.8 7.8L5.6 5.6m10.6 2.2l2.2-2.2M7.8 16.2l-2.2 2.2M12 12l9 3l-4 2l-2 4z"/></svg>
                                <div class="prop_txt">
                                    <h3 class="prop_title">
                                        Earn with every click
                                    </h3>
                                    <h4 class="prop_desc">
                                        Even if users don't finish the survey, we still offer a small reward for each attempt.
                                    </h4>
                                </div>
                            </div>
                            <div class="app_prop">
                                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24"><path fill="#049adf" d="M17.9 17.39c-.26-.8-1.01-1.39-1.9-1.39h-1v-3a1 1 0 0 0-1-1H8v-2h2a1 1 0 0 0 1-1V7h2a2 2 0 0 0 2-2v-.41a7.984 7.984 0 0 1 2.9 12.8M11 19.93c-3.95-.49-7-3.85-7-7.93c0-.62.08-1.22.21-1.79L9 15v1a2 2 0 0 0 2 2m1-16A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2"/></svg>
                                <div class="prop_txt">
                                    <h3 class="prop_title">Worldwide Fill</h3>
                                    <h4 class="prop_desc">
                                        Sourcing from twelve major marketplaces, we always have offers and surveys available.
                                    </h4>
                                </div>
                            </div>
                            <div class="app_prop">
                                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24"><path fill="#049adf" d="m17.5 16.82l2.44 1.41l-.75 1.3L16 17.69V14h1.5zM24 17c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-.34.03-.67.08-1H2V4h18v6.68c2.36 1.13 4 3.53 4 6.32m-13.32-3c.18-.36.37-.7.6-1.03c-.09.03-.18.03-.28.03c-1.66 0-3-1.34-3-3s1.34-3 3-3s3 1.34 3 3c0 .25-.04.5-.1.73c.94-.46 1.99-.73 3.1-.73c.34 0 .67.03 1 .08V8a2 2 0 0 1-2-2H6c0 1.11-.89 2-2 2v4a2 2 0 0 1 2 2zM22 17c0-2.76-2.24-5-5-5s-5 2.24-5 5s2.24 5 5 5s5-2.24 5-5"/></svg>
                                <div class="prop_txt">
                                    <h3 class="prop_title">
                                        Fast NET 30 Payments.
                                    </h3>
                                    <h4 class="prop_desc">
                                        Seeing your revenue on our dashboard is great, receiving them in your wallet is even better.
                                    </h4>
                                </div>
                            </div>
                            <div class="app_prop">
                                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24"><g fill="none" stroke="#049adf" stroke-linecap="round" stroke-width="1.5"><path d="M12 6v12m3-8.5C15 8.12 13.657 7 12 7S9 8.12 9 9.5s1.343 2.5 3 2.5s3 1.12 3 2.5s-1.343 2.5-3 2.5s-3-1.12-3-2.5"/><path d="M7 3.338A9.954 9.954 0 0 1 12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12c0-1.821.487-3.53 1.338-5"/></g></svg>
                                <div class="prop_txt">
                                    <h3 class="prop_title">
                                        Integrate Once, Earn Daily.
                                    </h3>
                                    <h4 class="prop_desc">
                                        Once the integration is finalized, you can set it and forget it allowing your revenue to grow effortlessly.
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- AboutUs End -->

            <!-- Steps Start -->
            <section class="steps">
                <div class="container">
                    <h1 class="steps_title">
                        Driving revenue with <span>performance</span>
                    </h1>
                    <h3 class="steps_subtitle">
                        We showcase your brand offers to targeted audiences
                        <br /> through relevant apps across the globe.
                    </h3>
                    <div class="steps_cards">
                        <div class="steps_card">
                            <div class="card_txt one">
                                <div class="step_num">step 1</div>
                                <h2 class="card_title">Engage users.</h2>
                                <p class="card_desc">
                                    Capture your target audience with customized strategies that attract users to your platform, creating a lasting first impression and maintaining long-term engagement.
                                </p>
                            </div>
                            <div class="card_img one">
                                <img
                                    src="{{ asset('assets/images/apps-illustration.svg')}}"
                                    alt="image"
                                />
                            </div>
                        </div>
                        <div class="steps_card">
                            <div class="card_txt two">
                                <div class="step_num">step 2</div>
                                <h2 class="card_title">Convert users.</h2>
                                <p class="card_desc">
                                    Incentivize users for important actions such as downloads and purchases.
                                </p>
                            </div>
                            <div class="card_img two">
                                <img src="{{ asset('assets/images/401725046978.png')}}" alt="image" />
                            </div>
                        </div>
                        <div class="steps_card">
                            <div class="card_txt three">
                                <div class="step_num">step 3</div>
                                <h2 class="card_title">Smoothly and continuously.</h2>
                                <p class="card_desc">
                                    Expand your user base effectively by utilizing data-driven insights and scalable solutions that adapt to your changing requirements.
                                </p>
                            </div>
                            <div class="card_img three">
                                <img src="{{ asset('assets/images/step-3.png')}}" alt="image" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Start End -->

            <!-- FastCards Start -->
            <section class="fast_cards">
                <div class="container">
                    <div class="card one" data-aos="flip-up">
                        <h2 class="title">developer</h2>
                        <p class="desc">
                            Explore cutting-edge tools and resources designed for developers to streamline your workflow and turn your creative ideas into reality
                        </p>
                        <a target="_blank" href="https://docs.upwall.net/">
                            <button class="card_btn">
                            documentation
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        </a>
                    </div>
                    <div class="card two">
                        <h2 class="title">Advertise</h2>
                        <p class="desc">
                            Amplify your brand, attract new users, and unlock your product's global potential! With access to millions of active users across thousands of apps and websites, you can effortlessly acquire new users for unmatched growth and visibility.
                        </p>
                        <a href="/cdn-cgi/l/email-protection#bddcd9cbd8cfc9d4ced8cfcefdc8cdcadcd1d193d3d8c9">
                        <button class="card_btn">
                            launch campaign
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        </a>
                    </div>
                </div>

            </section>

        @endsection
