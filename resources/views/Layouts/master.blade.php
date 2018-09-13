<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
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
                     <em class="icon-user"></em> User
                  </a>
                  <div class="dropdown-menu dropdown-menu-right animated flipInX">
                     <div class="dropdown-item">
                        <div class="list-group">
                           <div class="list-group-item list-group-item-action">
                              <div class="media-body">
                                 <center>
                                    <div class="user-block-picture">
                                       <div class="user-block-status">
                                          <img class="img-thumbnail rounded-circle" src="{{ asset('img/user/02.jpg') }}" alt="Avatar" width="60" height="60">
                                       </div>
                                    </div>
                                    <p class="m-0">Nama Admin</p>
                                    <p class="m-0 text-muted text-sm">Level/Jabatan</p>
                                 </center>  
                              </div>
                           </div>
                           <div class="list-group-item list-group-item-action">
                              <div class="media-body">
                                 <center>
                                    <a href=""><em class="fa fa-lock"></em> Log out</a>
                                 </center>
                              </div>
                           </div>
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
               <!-- START sidebar nav-->
               <ul class="sidebar-nav">
                  <!-- Dihapus Saat sudah kelar semua-->
                  <li class="nav-heading ">
                     <span>Template Page</span>
                  </li>
                  <li class="">
                     <a href="#menu_template" title="Template" data-toggle="collapse">
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
      <!-- Page footer-->
      <footer class="footer-container">
         <span>&copy; 2018 - Angle</span>
      </footer>
   </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js-content')
</body>
</html>
