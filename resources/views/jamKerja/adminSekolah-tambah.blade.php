@extends('layouts.master')
@section('content-heading')
<span>Tambah Jam Kerja</span>
<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, iste.</small>{{-- Jenjang - Nama Sekolah --}}
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="/pengaturan-jam-kerja" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
      </div>
    </div>
    <div class="card-body">
      <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Hari</label>
          <div class="col-lg-10">
            <select class="form-control select2" name="hari_id" required>
              <option value=""></option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Jam Masuk</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="jamMasuk" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Jam Pulang</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="jamPulang" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-right"></label>
          <div class="col-xl-10">
            <button type="submit" class="btn btn-labeled btn-info btn">
              <span class="btn-label"><i class="fa fa-save"></i></span><b>Simpan</b>
            </button>
            <button type="reset" class="btn btn-labeled btn-danger btn">
              <span class="btn-label"><i class="fa fa-undo"></i></span><b>Reset</b>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection