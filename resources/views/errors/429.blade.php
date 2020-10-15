@extends('layouts.app')

@section('title', 'Terlalu Banyak Permintaan')
@section('code', '429')

@section('content')
<div class="page-error mt-5">
  <div class="page-inner">
    <h1>429</h1>
    <div class="page-description">
      Melebihi batas kecepatan untuk permintaan ke server.
    </div>
    <div class="page-search">
      <div class="mt-2">
        <a href="{{ route('welcome') }}">Kembali ke Home</a>
      </div>
    </div>
  </div>
</div>
@endsection