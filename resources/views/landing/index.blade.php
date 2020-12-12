@extends('layouts.main')

@section('css-libraries')
  <link rel="stylesheet" href="{{ asset('stisla/modules/jquery-selectric/selectric.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
@endsection

@section('content')
  <section class="section">

    @if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>×</span>
        </button>
        {{ $message }}
      </div>
    </div>
    @endif

    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
          <h1 class="text-center">Bantuan Covid-19</h1>
          <div class="card card-primary">
            <div class="card-body">
              <div class="bs-stepper">
                <div class="bs-stepper-header" role="tablist">
                  {{-- steps --}}
                  <div class="step" data-target="#account-detail">
                    <button type="button" class="step-trigger" role="tab" aria-controls="account-detail" id="account-detail-trigger">
                      <span class="bs-stepper-circle">1</span>
                      <span class="bs-stepper-label">Data Umum</span>
                    </button>
                  </div>
                  <div class="line"></div>
                  <div class="step" data-target="#identity">
                    <button type="button" class="step-trigger" role="tab" aria-controls="identity" id="identity-trigger">
                      <span class="bs-stepper-circle">2</span>
                      <span class="bs-stepper-label">Data Spesifik</span>
                    </button>
                  </div>
                  {{-- end steps --}}
                </div>
                {{-- step content --}}
                <div class="bs-stepper-content">
                  <form id="form" action="{{route('add.pemohon')}}" method="POST" enctype="multipart/form-data" class="needs-validation">
                  @csrf
                    <div class="content" id="account-detail" role="tabpanel" aria-labelledby="account-detail-trigger">

                      <div class="row">
                        <div class="form-group col-6">
                          <label for="name">Nama Pemohon</label>
                          <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group col-6">
                          <label for="nik">NIK</label>
                          <input type="number" name="nik" id="nik" class="form-control" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-6">
                          <label for="kecamatan">Kecamatan</label>
                          <input id="text" type="kecamatan" class="form-control" name="kecamatan">
                        </div>
                        <div class="form-group col-6">
                          <label for="desa">Desa</label>
                          <input type="text" class="form-control" name="desa" id="desa" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-6">
                          <label for="alamat">Alamat</label>
                          <input type="text" class="form-control" placeholder="Ex: 0834xxxx" name="alamat" id="alamat" required>
                        </div>
                        <div class="form-group col-6">
                          <label for="tgl_pengajuan" class="d-block">Tanggal Pengajuan</label>
                          <input type="text" class="form-control datepicker" name="tgl_pengajuan" id="tgl_pengajuan" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-6">
                          <label for="ktp">Foto KTP</label>
                          <input type="file" class="form-control" name="ktp" required>
                        </div>
                        <div class="form-group col-6">
                          <label for="kk">Foto KK</label>
                          <input type="file" class="form-control" name="kk" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-lg custom-btn btn-next-form" onclick="stepNext()">Selanjutnya</button>
                      </div>
                    </div>
                    
                    <div class="content" id="identity" role="tabpanel" aria-labelledby="identity-trigger">
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="pekerjaan" class="d-block">Pekerjaan</label>
                          <select class="form-control selectric" name="pekerjaan" id="pekerjaan" required>
                            <option value="none">- Pekerjaan -</option>
                            <option value="pns">PNS</option>
                            <option value="wiraswasta">Wiraswasta</option>
                            <option value="wirausaha">Wirausaha</option>
                            <option value="irt">Ibu Rumah Tangga</option>
                          </select>
                        </div>
                        <div class="form-group col-6">
                          <label for="gaji">Rata-Rata Pendapatan Perbualan</label>
                          <input type="number" name="gaji" id="gaji" class="form-control" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="rekening" class="d-block">No. Rekening</label>
                          <input type="number" name="rekening" id="rekening" class="form-control" required>
                        </div>
                        <div class="form-group col-6">
                          <label for="wa">No Hp/WA</label>
                          <input type="tel" name="wa" id="wa" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group mb-0">
                        <button type="button" class="btn btn-lg btn-light mr-1" onclick="stepPrev()">Sebelumnya</button>
                        <button type="submit" class="btn btn-lg btn-primary">Kirim</button>
                      </div>
                    </div>
                  </form>
              </div>
              {{-- end step content --}}
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js-libraries')
  <script src="{{ asset('stisla/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('stisla/modules/cleave-js/cleave.min.js')}}"></script>
  <script src="{{ asset('stisla/modules/cleave-js/addons/cleave-phone.id.js') }}"></script>
  <script src="{{ asset('stisla/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
@endsection

@section('page-specific-js')
  {{-- stepper logic --}}
  <script>
    let stepper = new Stepper($('.bs-stepper')[0])

    // next
    function stepNext() {
      stepper.next()
    }
    // prev
    function stepPrev() {
      stepper.previous()
    }
  </script>
@endsection