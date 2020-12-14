@extends('layouts.dashboard')

@section('content')
  <div class="section-header">
    @php
        setlocale(LC_ALL, 'id-ID', 'id_ID');
    @endphp
    <h1>{{ strftime("%A, %d %B %Y") }}</h1>
  </div>

<div class="section-body">

  <div class="row">
    <div class="col-12 mb-4">
      <div class="hero bg-primary text-white">
        <div class="hero-inner">
          <h2>Selamat datang kembali, {{ Auth::user()->name }}</h2>
          <p class="lead">Terdapat request pengajuan bantuan Covid-19, lihat selengkapnya.</p>
          <div class="mt-4">
            <a href="{{ route('admin.list') }}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-list-ul"></i> List Pengajuan</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection