@extends('layouts.app')

@section('title', 'Server Bermasalah')
@section('code', '500')

@section('content')
<div class="page-error mt-5">
  <div class="page-inner">
    <h1>500</h1>
    <div class="page-description">
      Oh tidak! Server bermasalah, silakan refresh halaman ini dan kontak developer jika mengalami kesulitan.
    </div>
    <div class="page-search">
      <div class="mt-2">
        <a href="{{ route('welcome') }}">Kembali ke Home</a>
      </div>
    </div>
  </div>
</div>
@endsection