@extends('layouts.app')

@section('title', 'Confirm Password')

@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <img src="https://ui-avatars.com/api/?name={{ config('app.name') }}&background=fff&color=6777ef&size=100"
                    alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            @if (session('status') == 'verification-link-sent')
            <div class="alert alert-info alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            </div>
            @endif

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Confirm Password</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </p>
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger btn-lg btn-block" tabindex="4">
                                {{ __('Logout') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection