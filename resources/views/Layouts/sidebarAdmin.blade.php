<li class="">
  <a href="{!!route('dashboard')!!}" title="Dashboard">
    <div class="float-right mr-2"><em class=""></em>&nbsp;</div>
    <em class="icon-home"></em>
    <span>Dashboard</span>
  </a>
</li>
<li class="">
  <a href="#menuMaster" title="Master Data" data-toggle="collapse">
    <div class="float-right mr-2"><em class="fa fa-angle-down"></em></div>
    <em class="icon-layers"></em>
    <span>Master</span>
  </a>
  <ul class="sidebar-nav sidebar-subnav collapse" id="menuMaster">
    <li class="sidebar-subnav-header">Master Data</li>
    <li class=""><a href="{!!route('jenjangData')!!}">Jenjang</a></li>
    <li class=""><a href="{!!route('statusSekolahData')!!}">Status Sekolah</a></li>
    <li class=""><a href="{!!route('kategoriPresensiData')!!}">Kategori Presensi</a></li>
  </ul>
</li>
<li class="">
  <a href="#menuDataSekolah" title="Data Sekolah" data-toggle="collapse">
    <div class="float-right mr-2"><em class="fa fa-angle-down"></em></div>
    <em class="icon-graduation"></em>
    <span>Data Sekolah</span>
  </a>
  <ul class="sidebar-nav sidebar-subnav collapse" id="menuDataSekolah">
    <li class="sidebar-subnav-header">Data Sekolah</li>
    <li class=""><a href="{!!route('sekolahData')!!}">Sekolah</a></li>
    <li class=""><a href="{!!route('adminSekolahData')!!}">Admin Sekolah</a></li>
    <li class=""><a href="{!!route('pegawaiData')!!}">Pegawai</a></li>
  </ul>
</li>
<li class="">
  <a href="/data-presensi/data" title="Data Presensi">
    <div class="float-right mr-2"><em class="]"></em>&nbsp;</div>
    <em class="icon-book-open"></em>
    <span>Data Presensi</span>
  </a>
</li>
<li class="">
  <a href="{!!route('adminData')!!}" title="Data Admin">
    <div class="float-right mr-2"><em class="]"></em>&nbsp;</div>
    <em class="icon-people"></em>
    <span>Data Admin</span>
  </a>
</li>
