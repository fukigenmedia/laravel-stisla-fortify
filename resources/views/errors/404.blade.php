@extends('layouts.app')

@section('title', 'Tidak Ditemukan')
@section('code', '404')

@section('content')
<div class="page-error mt-5">
  <div class="page-inner">
    <h1>404</h1>
    <div class="page-description">
      Halaman yang Anda cari tidak ditemukan.
    </div>
    <div class="page-search">
      <div class="mt-2">
        <a href="{{ route('welcome') }}">Kembali ke Home</a>
      </div>
    </div>
  </div>
</div>
@endsection