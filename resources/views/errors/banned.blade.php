@extends('layouts.app')

@section('title', 'Banned')
@section('code', '403')

@section('content')
<div class="page-error mt-5">
  <div class="page-inner">
    <h1>BANNED</h1>
    <div class="page-description">
      Akun Anda belum aktif/dinonaktifkan.
      Silahkan kontak admin untuk info lebih lanjut.
    </div>
    <div class="page-search">
      <div class="mt-2">
        <a href="">Kembali ke Home</a>
      </div>
    </div>
  </div>
</div>
@endsection