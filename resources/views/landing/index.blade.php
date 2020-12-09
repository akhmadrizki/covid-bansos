@extends('layouts.main')

@section('css-libraries')
  <link rel="stylesheet" href="{{ asset('stisla/modules/jquery-selectric/selectric.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
@endsection

@section('content')
  <section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
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
                  <form id="form" class="needs-validation">
                  @csrf
                    <div class="content" id="account-detail" role="tabpanel" aria-labelledby="account-detail-trigger">

                      <div class="row">
                        <div class="form-group col-6">
                          <label for="name">Nama Lengkap</label>
                          <input id="name" type="text" class="form-control name="name" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group col-6">
                          <label for="username">Username</label>
                          <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-6">
                          <label for="email">Email</label>
                          <input id="email" type="email" class="form-control name="email" required autocomplete="email">
                        </div>
                        <div class="form-group col-6">
                          <label for="phone_number">No. Handphone</label>
                          <input type="tel" class="form-control phone-number" placeholder="Ex: 0834xxxx" name="phone_number" id="phone_number" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-6">
                          <label for="date_birth" class="d-block">Tanggal Lahir</label>
                          <input type="text" class="form-control datepicker" placeholder="Tanggal Lahir" name="date_birth" id="date_birth" required>
                        </div>
                        <div class="form-group col-6">
                          <label for="status" class="d-block">Status</label>
                          <select class="form-control selectric" name="status" id="status" required>
                            <option value="pelajar">Pelajar/Mahasiswa</option>
                          </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-12">
                          <label for="instansi" class="d-block">Instansi</label>
                          
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-6">
                          <label for="password" class="d-block">Password</label>
                        </div>
                        <div class="form-group col-6">
                          <label for="password-confirm" class="d-block">Konfirmasi Password</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-4">
                          <label for="keahlian" class="d-block">Bidang Kreatif</label>
                          <select class="form-control selectric" name="keahlian" id="keahlian" required>
                            <option value="aplikasi-dan-pengembangan-permainan">Aplikasi dan pengembangan permainan</option>
                            <option value="arsitektur">Arsitektur</option>
                            <option  value="desain-produk">Desain Produk</option>
                            <option  value="fesyen">Fesyen</option>
                          </select>
                        </div>
                        <div class="form-group col-8">
                          <label for="portfolio" class="d-block">Portfolio (optional)</label>
                          <span style="font-size: 12px;">*Ket: Max. 2MB (PDF)</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-lg custom-btn btn-next-form" onclick="stepNext()">Selanjutnya</button>
                      </div>
                    </div>
                    <div class="content" id="identity" role="tabpanel" aria-labelledby="identity-trigger">
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="ktp">Foto KTP</label>
                          <b>IMPORTANT NOTE: Foto KTP Wajib Diisi!</b>
                        </div>
                        <div class="form-group col-6">
                          <label for="nik">No. NIK</label>
                          <input id="nik" type="number" class="form-control" name="no_nik" required>
                        </div>
                      </div>
                      <div class="form-group mb-0">
                        <button type="button" class="btn btn-lg btn-light mr-1" onclick="stepPrev()">Sebelumnya</button>
                        <button type="submit" class="btn btn-lg custom-btn">Register</button>
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