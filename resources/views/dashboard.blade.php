@extends('layouts.backend')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Dashboard</h4>
    </div>
    <div class="card-body">
        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
        @include('profile.update-profile-information-form')
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        @include('profile.update-password-form')
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))
        @include('profile.two-factor-authentication-form')
        @endif
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ducimus temporibus aut ratione maxime
        accusamus
        commodi esse itaque tenetur. Temporibus ducimus ea veniam quisquam rerum vitae? Animi quos laudantium quam?
    </div>
</div>
@endsection