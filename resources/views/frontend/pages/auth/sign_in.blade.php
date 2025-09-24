@extends('frontend.layout.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')

<div id="main-wrapper">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-4 auth-card">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="/" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" alt="Logo-light" style="width: 200px" />
                            </a>
                            <div class="position-relative text-center my-4">
                                <p class="mb-0 fs-4 px-3 d-inline-block bg-body text-dark z-index-5 position-relative">Welcome to EK Profithub 👋</p>
                                <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                            </div>
                            <form method="post" action="{{ route('sign.in.post') }}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="{{ __('Email') }}"
                                    name="email" value="{{ env('APP_DEMO') == true ? 'user1@gmail.com' : old('email') }}"
                                    required="" />
                                    <label><i class="ti ti-user me-2 fs-4"></i>Username or Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" value="{{ env('APP_DEMO') == true ? '123456' : '' }}" placeholder="Password" required />
                                    <label><i class="ti ti-lock me-2 fs-4"></i>Password</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                    <a class="text-primary fw-medium" href="{{ route('forget.password.get') }}">Forgot Password ?</a>
                  </div>
                                <button type="submit" name="signin" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                                <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-3 mb-0 fw-medium">New to EK Profithub?</p>
                    <a class="text-primary fw-medium ms-2" href="{{ route('sign.up') }}">Create an account</a>
                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
