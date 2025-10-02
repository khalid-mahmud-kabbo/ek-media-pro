@extends('frontend.layout.master')
@section('title', isset($title) ? $title : 'Two Factor Authentication')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')



<section class="fast_cards auth">
                <div class="container">
                    <div class="card one" data-aos="flip-up">
                        <a class="text-nowrap logo-img text-center d-block w-100 mb-4">
                                <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" alt="Logo-light" style="width: 200px" />
                            </a>


                            <h3 class="text-center text-white">Two Factor Authentication</h3>
                            <p class="text-center text-white">{{__('Please enter your verification code')}}</p>

                            @if(session('info'))
    <p>{{ session('info') }}</p>
@endif

<form method="post" action="{{ route('login.2fa.verify.post') }}" class="w-100  py-4 px-5">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="code" placeholder="Enter verification code" required="" />
                                    <label><i class="fa-regular fa-envelope"></i> Varification Code</label>
                                </div>

                                <button type="submit" name="verify" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Verify & Sign In</button>

                            </form>
                    </div>
                </div>

            </section>


@endsection
