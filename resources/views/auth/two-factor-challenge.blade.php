@extends('layouts.app')

@section('title', 'Two Factor Challenge')

@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <img src="https://ui-avatars.com/api/?name={{ config('app.name') }}&background=fff&color=6777ef&size=100"
                    alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            @if (session('status'))
            <div class="alert alert-info alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    {{ session('status') }}
                </div>
            </div>
            @endif

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Two Factor Challenge</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted">
                        {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                    </p>
                    <form method="POST" action="{{ url('/two-factor-challenge') }}">
                        @csrf
                        <div class="form-group">
                            <label for="code">{{ __('Code') }}</label>
                            <input type="text" id="code" class="form-control" name="code" />
                        </div>

                        <p class="text-muted">
                            {{ __('Or you can enter one of your emergency recovery codes.') }}
                        </p>

                        <div class="form-group">
                            <label for="recovery_code">{{ __('Recovery Code') }}</label>
                            <input type="text" id="recovery_code" class="form-control" name="recovery_code" />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection