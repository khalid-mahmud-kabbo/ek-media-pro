@extends('frontend.layout.master')
@section('title', isset($title) ? $title : 'Forget Password')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <section class="fast_cards auth">
                <div class="container">
                    <div class="card one" data-aos="flip-up">
                        <a class="text-nowrap logo-img text-center d-block w-100 mb-4">
                                <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" alt="Logo-light" style="width: 200px" />
                            </a>


                            <h3 class="text-center text-white">Forget Password</h3>
                            <p class="text-center text-white">{{__('Please enter your valid email for reset password')}}</p>



<form method="post" action="{{route('forget.password.post')}}" class="w-100  py-4 px-5">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Verified Email" required="" />
                                    <label><i class="fa-regular fa-envelope"></i> Email</label>
                                </div>

                                <button type="submit" name="verify" class="btn btn-primary w-100 py-8 mb-4 rounded-2">{{ __('Reset Password')}}</button>

                            </form>
                    </div>
                </div>

            </section>
@endsection
