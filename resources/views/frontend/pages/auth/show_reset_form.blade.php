@extends('frontend.layout.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')

     <section class="fast_cards auth">
                <div class="container">
                    <div class="card one" data-aos="flip-up">
                        <a class="text-nowrap logo-img text-center d-block w-100 mb-4">
                                <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" alt="Logo-light" style="width: 200px" />
                            </a>


                            <h3 class="text-center text-white">Reset Password</h3>
                            <p class="text-center text-white">{{__('Now you can reset your password')}}</p>



<form method="post" action="{{route('reset.password.post')}}" class="w-100  py-4 px-5">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">


                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" placeholder="{{__('Email')}}" name="email" required="" />
                                    <label><i class="fa-regular fa-envelope"></i> Email</label>
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" placeholder="{{__('Password')}}" name="password" required="" />
                                    <label><i class="fa-regular fa-envelope"></i> Password</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" placeholder="{{__('Confirm Password')}}" name="password_confirmation" required="" />
                                    <label><i class="fa-regular fa-envelope"></i> Confirm Password</label>
                                </div>

                                <button type="submit" name="verify" class="btn btn-primary w-100 py-8 mb-4 rounded-2">{{ __('Reset Password')}}</button>

                            </form>
                    </div>
                </div>

            </section>
@endsection
