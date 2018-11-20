<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/logo/lg2.png') }}">
</head>
<body>
  <div class="wrapper">
    <header class="topnavbar-wrapper">
      <nav class="navbar topnavbar">
        <div class="navbar-header">
          <a class="navbar-brand" href="#/">
            <div class="brand-logo">
              <img class="img-fluid" src="{{ asset('img/logo/lg1.png') }}" alt="App Logo">
            </div>
            <div class="brand-logo-collapsed">
              <img class="img-fluid" src="{{ asset('img/logo/lg2.png') }}" alt="App Logo">
            </div>
          </a>
        </div>
        <ul class="navbar-nav mr-auto flex-row">
          <li class="nav-item">
            <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
              <em class="fas fa-bars"></em>
            </a>
            <a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true">
              <em class="fas fa-bars"></em>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav flex-row" style="padding-right: 10px;">
          <li class="nav-item d-none d-md-block">
            <a class="nav-link" href="#" data-toggle-fullscreen="">
              <em class="fas fa-expand"></em> Layar Penuh
            </a>
          </li>
          <li class="nav-item dropdown dropdown-list">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown">
              <em class="icon-user"></em> {{Auth::User()->nama}}
            </a>
            <div class="dropdown-menu dropdown-menu-right animated flipInX">
              <div class="dropdown-item">
                <div class="list-group">
                  <div class="list-group-item list-group-item-action">
                    <div class="media-body">
                      <center>
                        <div class="user-block-picture">
                          <div class="user-block-status">
                            <img class="img-thumbnail thumb80 rounded-circle" src="{{asset(Auth::User()->foto)}}" alt="Avatar">
                          </div>
                        </div>
                        <p class="m-0">{{Auth::User()->nama}}</p>
                        <p class="m-0 text-muted text-sm">{{Auth::User()->TipeText}}</p>
                      </center>
                    </div>
                  </div>
                  <a href="{!!route('profileEditForm')!!}" class="list-group-item list-group-item-action">
                    <div class="media">
                      <div class="align-self-start mr-2">
                        <em class="fa fa-edit text-success"></em>
                      </div>
                      <div class="media-body">
                        <p class="m-0">Edit Profil</p>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action" id="logout">
                    <div class="media">
                      <div class="align-self-start mr-2">
                        <em class="fa fa-power-off text-danger"></em>
                      </div>
                      <div class="media-body">
                        <p class="m-0">Log Out</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <aside class="aside-container">
      <div class="aside-inner">
        <nav class="sidebar" data-sidebar-anyclick-close="">
          <ul class="sidebar-nav">
            <li class="nav-heading ">
              <span>Menu Navigasi</span>
            </li>
            @if(Auth::user()->tipe == '1')
              @include('Layouts.sidebarAdmin')
            @elseif(Auth::user()->tipe == '2')
              @include('Layouts.sidebarAdminSekolah')
            @endif
            <!-- Dihapus Saat sudah kelar semua-->
            <li class="nav-heading ">
              <span>Template Page</span>
            </li>
            <li class="">
              <a href="#menu_template" title="Template" data-toggle="collapse">
                <div class="float-right mr-2 ml-2"><em class="fa fa-angle-down"></em></div>
                <em class="icon-layers"></em>
                <span>Halaman Template</span>
              </a>
              <ul class="sidebar-nav sidebar-subnav collapse" id="menu_template">
                <li class="sidebar-subnav-header">Halaman Template</li>
                <li class=""><a href="/template/data"><span>Data Table</span></a></li>
                <li class=""><a href="/template/form"><span>Form</span></a></li>
                <li class=""><a href="/template/chart"><span>Moris Chart</span></a></li>
              </ul>
            </li>
            <!-- batas untuk dihapus Saat sudah kelar semua-->
          </ul>
        </nav>
      </div>
    </aside>

    <section class="section-container">
      <div class="content-wrapper">
        <div class="content-heading">
          <div>
            @yield('content-heading')
          </div>
        </div>
        @yield('content')
      </div>
    </section>
    <footer class="footer-container">
      <span>&copy; 2018 - Dinas Pendidikan <strong>Kab. Banjar</strong></span>
    </footer>
  </div>
  @yield('content-additional')
  <script src="{{ asset('js/app.js') }}"></script>
  @if (session('alert'))
    <script>notif('{{session('tipe')}}', '{{session('judul')}}', '{{session('pesan')}}')</script>
  @endif
  @if ($errors->count())
    <script>notif('error', 'Ada Kesalahan', '{{$errors->first()}}')</script>
  @endif
  @yield('js-content')
</body>
</html>
