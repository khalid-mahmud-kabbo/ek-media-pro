@extends('frontend.layout.master')
@section('title', isset($title) ? $title : 'Sign Up')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')

<section class="fast_cards auth">
                <div class="container">
                    <div class="card one" data-aos="flip-up">
                       <a class="text-nowrap logo-img text-center d-block w-100 mb-4">
                                <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" alt="Logo-light" style="width: 200px" />
                            </a>


                            <h3 class="text-center text-white">Sign Up</h3>
                            <p class="text-center text-white">{{__('Hello! Welcome to EK Profithub 👋')}}</p>


                        <form action="{{route('sign.up.post')}}" method="post" class="w-100 py-4 px-5">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="{{__('Name')}}" name="name" required="" />
                                    <label><i class="fa-regular fa-user"></i> Full Name</label>
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"  placeholder="{{__('Email')}}" name="email" required="" />
                                    <label><i class="fa-regular fa-envelope"></i> Email</label>
                                </div>



                                <div class="form-floating mb-3">
                                     <select class="form-control" name="account_type" id="account_type">
                                    <option value="publisher">{{__('Publisher')}}</option>
                                    <option value="advertiser">{{__('Advertiser')}}</option>
                                </select>
                                    <label><i class="fa-solid fa-i-cursor"></i> Account Type</label>
                                </div>





                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" value="{{ env('APP_DEMO') == true ? '123456' : '' }}" placeholder="Password" required />
                                    <label><i class="fa-solid fa-key"></i> Password</label>
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control"  placeholder="{{__('Confirm Password')}}" name="confirm_password" required="" />
                                    <label><i class="fa-solid fa-key"></i> Confirm Password</label>
                                </div>


                                <button type="submit" name="signin" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign Up</button>
                                <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-3 mb-0 text-white fw-medium">{{ __('Already have an account?')}}</p>
                    <a class="text-primary fw-medium ms-2" href="{{route('login')}}">{{ __('Sign In')}}</a>
                  </div>
                            </form>
                    </div>
                </div>

            </section>














@endsection
