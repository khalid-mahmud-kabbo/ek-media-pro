@extends('frontend.layout.master')
@section('title', isset($title) ? $title : 'Sign In')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')



<section class="fast_cards auth">
                <div class="container">
                    <div class="card one" data-aos="flip-up">
                        <a class="text-nowrap logo-img text-center d-block w-100 mb-4">
                                <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" alt="Logo-light" style="width: 200px" />
                            </a>


                            <h3 class="text-center text-white">Sign In</h3>
                            <p class="text-center text-white">{{__('Hello! Welcome to EK Profithub 👋')}}</p>

<form method="post" action="{{ route('sign.in.post') }}" class="w-100  py-4 px-5">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="{{ __('Email') }}"
                                    name="email" value="{{ env('APP_DEMO') == true ? 'user1@gmail.com' : old('email') }}"
                                    required="" />
                                    <label><i class="fa-regular fa-envelope"></i> Username or Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" value="{{ env('APP_DEMO') == true ? '123456' : '' }}" placeholder="Password" required />
                                    <label><i class="fa-solid fa-key"></i> Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                    <a class="text-primary fw-medium" href="{{ route('forget.password.get') }}">Forgot Password ?</a>
                  </div>
                                <button type="submit" name="signin" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                                <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-3 text-white mb-0 fw-medium">New to EK Profithub?</p>
                    <a class="text-primary fw-medium ms-2" href="{{ route('sign.up') }}">Create an account</a>
                  </div>
                            </form>
                    </div>
                </div>

            </section>


@endsection
