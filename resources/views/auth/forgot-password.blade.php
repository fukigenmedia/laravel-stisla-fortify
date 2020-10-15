@extends('layouts.app')

@section('content')
<div>
    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <img src="https://ui-avatars.com/api/size=100&&?name={{ config('app.name') }}" alt="logo" width="100"
                    class="shadow-light rounded-circle">
            </div>

            @if (session('status'))
            <div class="alert alert-info shadow-sm">
                <i class="fas fa-info fa-fw mr-2"></i>
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Forgot Password</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">We will send a link to reset your password</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                value="{{ old('email') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                {{ __('Email Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection