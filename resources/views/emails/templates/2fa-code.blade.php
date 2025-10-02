@extends('emails.layout.master')
@section('title', isset($title) ? $title : $purpose)

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">2FA Code</h4>
                </div>
                <div class="card-body">
                    <p> Hello,</p>
                    <p>Your verification code is: <strong>{{ $code }}</strong></p>
                    <p>Please use this code to complete the process.</p>
                    <p>Thank you!</p>
                </div>

                <div class="card-footer">
                    <p>Powered by <a href="https://ekprofithub.com" target="_blank">EK Profithub</a></p>
                </div>

            </div>
        </div>
    </div>

@endsection
