@extends('layouts.master')
@section('content-heading')
  <span>Data Sekolah Saya</span>
  <small>{{"{$sekolah->Jenjang->nama} - {$sekolah->nama}"}}</small>
@endsection
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('sekolahSayaEdit')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-edit"></i></span><b>Ubah Data Sekolah</b></a>
        </div>
      </div>
      <div class="card-body">
        <dl class="row">
          <dt class="col-sm-3">NPSN</dt>
          <dd class="col-sm-9">{{$sekolah->npsn}}</dd>
          <dt class="col-sm-3">NSS</dt>
          <dd class="col-sm-9">{{$sekolah->nss}}</dd>
          <dt class="col-sm-3">Nama Sekolah</dt>
          <dd class="col-sm-9">{{$sekolah->nama}}</dd>
          <dt class="col-sm-3">Nama Kepala Sekolah</dt>
          <dd class="col-sm-9">{{$sekolah->NamaKepsek}}</dd>
          <dt class="col-sm-3">Jenjang</dt>
          <dd class="col-sm-9">{{$sekolah->Jenjang->nama}}</dd>
          <dt class="col-sm-3">Status</dt>
          <dd class="col-sm-9">{{$sekolah->Status->nama}}</dd>
          <dt class="col-sm-3">Kecamatan</dt>
          <dd class="col-sm-9">{{$sekolah->Kecamatan->nama}}</dd>
          <dt class="col-sm-3">Kelurahan</dt>
          <dd class="col-sm-9">{{$sekolah->Kelurahan->nama}}</dd>
          <dt class="col-sm-3">Alamat</dt>
          <dd class="col-sm-9">{{$sekolah->alamat}}</dd>
          <dt class="col-sm-3">Nomor Telepon</dt>
          <dd class="col-sm-9">{{$sekolah->no_telepon}}</dd>
          <dt class="col-sm-3">E-mail</dt>
          <dd class="col-sm-9">{{$sekolah->email}}</dd>
        </dl>
      </div>
    </div>
  </div>
@endsection
