<footer class="footer bg-black" style="padding: 5rem 4rem 0;">


    <div class="row g-0 justify-content-center text-white">


        <div class="col-md-3 for-mobile-footer">
            <h3>Company</h3>
            <ul>
                <li><a href="{{ route('about.us') }}">About Us</a></li>
                <li><a href="/products/all">Our Brands</a></li>
                <li><a href="/career">Careers</a></li>
            </ul>


        </div>

        <div class="col-md-3 for-mobile-footer">
            <h3>Help Center</h3>

            <ul>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('contact.us') }}">Support Center</a></li>
                <li><a href="#">Payment Security</a></li>
            </ul>
        </div>

        <div class="col-md-3 for-mobile-footer">
            <h3>Terms & Conditions</h3>

            <ul>
                <li><a href="{{ route('terms.conditions') }}">Terms & Conditions</a></li>
                <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('refund.policy') }}">Refund Policy</a></li>
                <li><a href="#">Store Locator</a></li>
            </ul>
        </div>

        <div class="col-md-3">

            <div class="single-widget newsletter-widget">
                <h3 class="widget-title">{{ __('Newsletter Sign Up') }}</h3>
                <p class="newsletter-text">
                    Sing Up for get latest news and update
                </p>
                <div class="newsletter-form mb-40">
                    <form id="subscribe_form" name="subscribe_form" method="POST">
                        @csrf
                        <div class="form-group d-flex">
                            <input type="email" class="form-control subscribe" id="subscribe" name="subscribe"
                                placeholder="{{ __('Enter Your Email') }}" required />
                            <button type="button"
                                class="subscribe-btn subscribe_btn">{{ __('Subscribe') }}</button>
                        </div>
                        <div class="for-desktop-contact d-flex gap-4 mt-5">
                            <p class="contact"><i class="fa-solid fa-phone"></i> {{ $allsettings['call_us'] }}</p>
                            <p class="contact"><i class="fa-solid fa-envelope"></i> {{ $allsettings['email'] }}</p>
                        </div>

                        <div class="for-mobile-contact d-none mt-5">
                        <p class="contact"><i class="fa-solid fa-phone"></i> {{ $allsettings['call_us'] }}</p>
                        <p class="contact"><i class="fa-solid fa-envelope"></i> {{ $allsettings['email'] }}</p>
                    </div>


                        <ul class="social-media d-flex gap-3">
                            @if (getSocialLink()->Facebook)
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="{{ getSocialLink()->Facebook }}">
                                        <i class="fab fa-facebook-f"></i></a>
                                </li>
                            @endif
                            @if (getSocialLink()->Twitter)
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="{{ getSocialLink()->Twitter }}">
                                        <i class="fab fa-twitter"></i></a>
                                </li>
                            @endif
                            @if (getSocialLink()->Linkedin)
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link"
                                        href="{{ getSocialLink()->Linkedin }}">
                                        <i class="fab fa-linkedin-in"></i></a>
                                </li>
                            @endif
                            @if (getSocialLink()->Instagram)
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link"
                                        href="{{ getSocialLink()->Instagram }}">
                                        <i class="fab fa-instagram"></i></a>
                                </li>
                            @endif
                        </ul>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <div class="copyright row g-0 mt-4">

<div class="col-md-6 m-auto">

    <p class="text-white" style="margin: 0!important;">Copyright @ 2024 ASRMART All Right Reserved. | Developed By <a style="color: brown;" href="https://eksoftwares.com" target="_blank">EK Softwares</a></p>
</div>




<div class="col-md-6">

    <div class="payment-methood" style="text-align: end;">

       <img src="{{asset('frontend/assets/images/payments.png')}}" alt="Payment Gateway">



     </div>



</div>


    </div>



</footer>
