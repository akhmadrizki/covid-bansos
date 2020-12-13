<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Dashboard Bansos Covid-19</title>
	{{-- general css --}}
	<link rel="stylesheet" href="{{ asset('stisla/modules/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('stisla/modules/fontawesome/css/all.min.css') }}">
	{{-- plugins --}}
  <link rel="stylesheet" href="{{ asset('stisla/modules/summernote/summernote.css') }}">
	{{-- template css --}}
	<link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
  @yield('additional-style')
</head>
<body>

	<div id="app">
		<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('stisla/img/avatar/avatar-1.png') }}" width="30" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display:none;">
                {{ csrf_field() }}
              </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
      	<aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/">Bansos Covid-19</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">
            	BC-19
            </a>
          </div>
          <ul class="sidebar-menu">
            {{-- <li class="{{ set_active('dashboard.index') }}"><a href="{{ route('dashboard.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li> --}}
            <li class="menu-header">CJDW Academy</li>
            <li><a href="" class="nav-link"><i class="fas fa-users"></i><span>Pelamar</span></a></li>
          </ul>
        </aside>
      </div>
      <div class="main-content">
      	<section class="section">
      		@yield('content')
      	</section>
      </div>
		</div>
	</div>

  @yield('modals')
	
	{{-- general javascript --}}
	<script src="{{ asset('stisla/modules/jquery.min.js') }}"></script>
	<script src="{{ asset('stisla/modules/popper.js') }}"></script>
	<script src="{{ asset('stisla/modules/tooltip.js') }}"></script>
	<script src="{{ asset('stisla/modules/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('stisla/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
	<script src="{{ asset('stisla/modules/moment.min.js') }}"></script>
	<script src="{{ asset('stisla/js/stisla.js') }}"></script>
	{{-- plugins --}}
  <script src="{{ asset('stisla/modules/summernote/summernote.min.js') }}"></script>
	{{-- template js --}}
	<script src="{{ asset('stisla/js/scripts.js') }}"></script>
	<script src="{{ asset('stisla/js/custom.js') }}"></script>
  {{-- sweet allert --}}
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  {{-- ck-editor --}}
  <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

  @yield('additionals-script')
  
</body>
</html>