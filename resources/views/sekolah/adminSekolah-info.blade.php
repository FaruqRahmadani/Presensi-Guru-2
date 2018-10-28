@extends('layouts.master')
@section('content-heading')
<span>Data Sekolah Saya</span>
<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, iste.</small>{{-- Jenjang - Nama Sekolah --}}
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="/ubah-sekolah-saya" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-edit"></i></span><b>Ubah Data Sekolah</b></a>
      </div>
    </div>
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-3">NPSN</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
        <dt class="col-sm-3">NSS</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
        <dt class="col-sm-3">Nama Sekolah</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
        <dt class="col-sm-3">Nama Kepala Sekolah</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
        <dt class="col-sm-3">Jenjang</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
        <dt class="col-sm-3">Status</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
        <dt class="col-sm-3">Kecamatan</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
        <dt class="col-sm-3">Kelurahan</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
        <dt class="col-sm-3">Alamat</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
        <dt class="col-sm-3">Nomor Telepon</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
        <dt class="col-sm-3">E-mail</dt>
        <dd class="col-sm-9">Lorem ipsum dolor.</dd>
      </dl>
    </div>
  </div>
</div>
@endsection