@extends('layouts.main')

@section('css-libraries')
  <link rel="stylesheet" href="{{ asset('stisla/modules/jquery-selectric/selectric.css') }}">
@endsection

@section('content')
    <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" action="#" class="needs-validation" novalidate="">
                  @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" tabindex="1" required autofocus autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>maaf email yang anda masukkan invalid/tidak terdaftar</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>password salah</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Belum punya Account? <a href="{{ route('register') }}">Register</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Bansos Covid-19 {{ date('Y') }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@section('js-libraries')
  <script src="{{ asset('stisla/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('stisla/modules/cleave-js/cleave.min.js')}}"></script>
  <script src="{{ asset('stisla/modules/cleave-js/addons/cleave-phone.id.js') }}"></script>
  <script src="{{ asset('stisla/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
@endsection