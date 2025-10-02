@extends('publisher.layout.master', ['menu' => 'account-settings'])
@section('title', isset($title) ? $title : 'Publisher Account Settings')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')


<div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Account Settings')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('publisher.dashboard')}}">{{__('Publisher')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Account Settings')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">

                <div class="the-payment-term-box">
                    <div class="icon-of">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <div class="details">
                    <h6>Secure Your Account</h6>
                    <p>Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code.</p>
                    </div>


                    <div class="input__button">
                                               <form action="{{ route('toggle.2fa') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-blue">
        {{ Auth::user()->f2_status == 'enabled' ? 'Disable 2FA' : 'Enable 2FA' }}
    </button>
</form>

@if(session('info'))
    <form action="{{ route('verify.disable.2fa') }}" method="POST">
        @csrf
        <input type="text" name="code" placeholder="Enter email code">
        <button type="submit" class="btn btn-red">Verify & Disable</button>
    </form>
@endif

                                            </div>


            </div>



                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row">




                                <div class="col-md-6">

                                    <div class="form-vertical__item bg-style">
                                        <h4 class="mb-25">Edit Profile Informtion</h4>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('publisher.update-account-settings') }}">
                                            @csrf


 <div class="row">


    <div class="col-md-12">
        <div class="input__group mb-25">
            <label>{{ __('Full Name') }}</label>
            <input type="text" id="full_name" name="full_name" value="{{ $user->name }}" placeholder="Full Name">
        </div>
    </div>


    <div class="col-md-12">
        <div class="input__group mb-25">
            <label>{{ __('Address') }}</label>
            <input type="text" id="address" name="address" value="{{ $user->address }}" placeholder="Address">
        </div>
    </div>

    <div class="col-md-12">
        <div class="input__group mb-25">
            <label>{{ __('Country') }}</label>
            <input type="text" id="country" name="country"  value="{{ $user->country }}" placeholder="Country">
        </div>
    </div>

    <div class="col-md-12">
        <div class="input__group mb-25">
            <label>{{ __('City') }}</label>
            <input type="text" id="city" name="city" value="{{ $user->city }}" placeholder="City">
        </div>
    </div>

    <div class="col-md-12">
        <div class="input__group mb-25">
            <label>{{ __('Postal Code') }}</label>
            <input type="text" id="postal_code" name="postal_code" value="{{ $user->post_code }}" placeholder="Postal Code">
        </div>
    </div>

    <div class="col-md-12">
        <div class="input__group mb-25">
            <label>{{ __('Phone Number') }}</label>
            <input type="number" id="phone_number" name="phone_number" value="{{ $user->Number }}" placeholder="Phone Number">
        </div>
    </div>


</div>




                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>









                                <div class="col-md-6">

                                    <div class="form-vertical__item bg-style">
                                        <h4 class="mb-25">Change Password</h4>
                                        <form enctype="multipart/form-data" method="POST" action="{{ route('change.password') }}">
                                            @csrf



                                            <div class="row">


    <div class="col-md-12">
        <div class="input__group mb-25">
            <label>{{ __('Current Password') }}</label>
            <input type="password" id="current_password" name="current_password" placeholder="Current Password">
        </div>
    </div>


    <div class="col-md-12">
        <div class="input__group mb-25">
            <label>{{ __('New Password') }}</label>
            <input type="password" id="new_password" name="new_password" placeholder="New Password">
        </div>
    </div>

    <div class="col-md-12">
        <div class="input__group mb-25">
            <label>{{ __('Confirm Password') }}</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
        </div>
    </div>


</div>




                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>









                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
