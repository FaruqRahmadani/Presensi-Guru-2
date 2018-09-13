<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
               <a class="navbar-brand" href="#/">
                  <div class="brand-logo">
                     <img class="img-fluid" src="img/logo.png" alt="App Logo">
                  </div>
                  <div class="brand-logo-collapsed">
                     <img class="img-fluid" src="img/logo-single.png" alt="App Logo">
                  </div>
               </a>
            </div>
            <!-- END navbar header-->
            <!-- START Left navbar-->
            <ul class="navbar-nav mr-auto flex-row">
               <li class="nav-item">
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                  <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
                     <em class="fas fa-bars"></em>
                  </a>
                  <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                  <a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true">
                     <em class="fas fa-bars"></em>
                  </a>
               </li>
               <!-- START User avatar toggle-->
               <li class="nav-item d-none d-md-block">
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                  <a class="nav-link" id="user-block-toggle" href="#user-block" data-toggle="collapse">
                     <em class="icon-user"></em>
                  </a>
               </li>
               <!-- END User avatar toggle-->
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="navbar-nav flex-row">
               <!-- Search icon-->
               <li class="nav-item">
                  <a class="nav-link" href="#" data-search-open="">
                     <em class="icon-magnifier"></em>
                  </a>
               </li>
               <!-- Fullscreen (only desktops)-->
               <li class="nav-item d-none d-md-block">
                  <a class="nav-link" href="#" data-toggle-fullscreen="">
                     <em class="fas fa-expand"></em>
                  </a>
               </li>
               <!-- START Alert menu-->
               <li class="nav-item dropdown dropdown-list">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown">
                     <em class="icon-bell"></em>
                     <span class="badge badge-danger">11</span>
                  </a>
                  <!-- START Dropdown menu-->
                  <div class="dropdown-menu dropdown-menu-right animated flipInX">
                     <div class="dropdown-item">
                        <!-- START list group-->
                        <div class="list-group">
                           <!-- list item-->
                           <div class="list-group-item list-group-item-action">
                              <div class="media">
                                 <div class="align-self-start mr-2">
                                    <em class="fab fa-twitter fa-2x text-info"></em>
                                 </div>
                                 <div class="media-body">
                                    <p class="m-0">New followers</p>
                                    <p class="m-0 text-muted text-sm">1 new follower</p>
                                 </div>
                              </div>
                           </div>
                           <!-- list item-->
                           <div class="list-group-item list-group-item-action">
                              <div class="media">
                                 <div class="align-self-start mr-2">
                                    <em class="fas fa-envelope fa-2x text-warning"></em>
                                 </div>
                                 <div class="media-body">
                                    <p class="m-0">New e-mails</p>
                                    <p class="m-0 text-muted text-sm">You have 10 new emails</p>
                                 </div>
                              </div>
                           </div>
                           <!-- list item-->
                           <div class="list-group-item list-group-item-action">
                              <div class="media">
                                 <div class="align-self-start mr-2">
                                    <em class="fas fa-tasks fa-2x text-success"></em>
                                 </div>
                                 <div class="media-body">
                                    <p class="m-0">Pending Tasks</p>
                                    <p class="m-0 text-muted text-sm">11 pending task</p>
                                 </div>
                              </div>
                           </div>
                           <!-- last list item-->
                           <div class="list-group-item list-group-item-action">
                              <span class="d-flex align-items-center">
                                 <span class="text-sm">More notifications</span>
                                 <span class="badge badge-danger ml-auto">14</span>
                              </span>
                           </div>
                        </div>
                        <!-- END list group-->
                     </div>
                  </div>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Alert menu-->
               <!-- START Offsidebar button-->
               <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
                     <em class="icon-notebook"></em>
                  </a>
               </li>
               <!-- END Offsidebar menu-->
            </ul>
            <!-- END Right Navbar-->
         </nav>
         <!-- END Top Navbar-->
      </header>
      <!-- sidebar-->
      <aside class="aside-container">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav class="sidebar" data-sidebar-anyclick-close="">
               <!-- START sidebar nav-->
               <ul class="sidebar-nav">
                  <!-- START user info-->
                  <li class="has-user-block">
                     <div class="collapse" id="user-block">
                        <div class="item user-block">
                           <!-- User picture-->
                           <div class="user-block-picture">
                              <div class="user-block-status">
                                 <img class="img-thumbnail rounded-circle" src="img/user/02.jpg" alt="Avatar" width="60" height="60">
                                 <div class="circle bg-success circle-lg"></div>
                              </div>
                           </div>
                           <!-- Name and Job-->
                           <div class="user-block-info">
                              <span class="user-block-name">Hello, Mike</span>
                              <span class="user-block-role">Designer</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <!-- END user info-->
                  <!-- Iterates over all sidebar items-->
                  <li class="nav-heading ">
                     <span>Menu Navigation</span>
                  </li>
                  <li class=" active">
                     <a href="singleview.html" title="Single View">
                        <em class="far fa-file"></em>
                        <span>Single View</span>
                     </a>
                  </li>
               </ul>
               <!-- END sidebar nav-->
            </nav>
         </div>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- offsidebar-->
      <!-- Main section-->
      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               <div>Single View
                  <small></small>
               </div>
            </div>
            <div class="row">
               <div class="col-12 text-center">
                  <h2 class="text-thin">Single view content</h2>
                  <p>This project is an application skeleton. You can use it to quickly bootstrap your jQuery webapp projects and dev environment for these projects.
                     <br>The seed app doesn't do much and has most of the feature removed so you can add theme as per your needs just following the demo app examples.</p>
               </div>
            </div>
         </div>
      </section>
      <!-- Page footer-->
      <footer class="footer-container">
         <span>&copy; 2018 - Angle</span>
      </footer>
   </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
