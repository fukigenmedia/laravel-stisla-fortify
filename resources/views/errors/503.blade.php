@extends('layouts.app')

@section('title', 'Layanan Tidak Tersedia')
@section('code', '503')

@section('content')
<div class="page-error mt-5">
  <div class="page-inner">
    <h1>503</h1>
    <div class="page-description">
      Layanan Tidak Tersedia, harap bersabar kami sedang melakukan perawatan website. Silahkan hubungi Admin.
    </div>
    <div class="page-search">
      <div class="mt-2">
        <a href="{{ route('welcome') }}">Kembali ke Home</a>
      </div>
    </div>
  </div>
</div>
@endsection