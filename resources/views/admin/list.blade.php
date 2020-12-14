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
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>List Pengajuan</h4>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped table-md">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Lampiran</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Pekerjaan</th>
                  <th>Pendapatan</th>
                  <th>Alamat</th>
                  <th>Tgl. Pengajuan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datapemohon as $list)
                  @php
                      $random = rand(100000, 999999);
                  @endphp
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>
                        <img src="{{ asset('img/' . $list->ktp) }}" alt="" width="80">
                        <img src="{{ asset('img/' . $list->kk) }}" alt="" width="80">
                      </td>
                      <td>{{ $list->nik }}</td>
                      <td>{{ $list->name }}</td>
                      <td>{{ $list->pekerjaan }}</td>
                      <td>± Rp. {{number_format($list->gaji, 0, ',', '.')}}</td>
                      <td>{{ $list->alamat }}, {{ $list->kecamatan }}</td>
                      <td>{{ $list->tgl_pengajuan }}</td>
                      <td><a href="https://api.whatsapp.com/send?phone={{ $list->wa }}&text={{ $list->name }}%20Selamat%20anda%20mendapatkan%20bantuan%20covid-19%0ASilahkan%20ke%20pos%20bantuan%20covid-19%20terdekat%20dan%20berikan%20code%20voucer%20berikut%0A*{{ $random }}*" target="_blank" class="btn btn-primary">Verifikasi</a></td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection