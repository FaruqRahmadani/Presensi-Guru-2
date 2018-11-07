@extends('layouts.master')
@section('content-heading')
<span>Ubah Data Sekolah Saya</span>
<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, iste.</small>{{-- Jenjang - Nama Sekolah --}}
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="/sekolah-saya" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
      </div>
    </div>
    <div class="card-body">
      <form action="" class="form-horizontal" method="post">
        @csrf
        <div class="form-group row row">
          <label class="col-xl-2 col-form-label text-bold">NPSN</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="npsn" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">NSS</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="nss" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Nama Sekolah</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="nama" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Jenjang</label>
          <div class="col-lg-10">
            <select class="form-control select2" name="jenjang_id" required>
              <option value=""></option>
              <option value=""></option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Status Sekolah</label>
          <div class="col-lg-10">
            <select class="form-control select2" name="status_id" required>
              <option value=""></option>
              <option value=""></option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Kecamatan</label>
          <div class="col-lg-10">
            <select class="form-control select2" name="kecamatan_id" id="kecamatan_id" required>
              <option value=""></option>
              <option value=""></option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Kelurahan</label>
          <div class="col-lg-10">
            <select class="form-control select2" name="kelurahan_id" id="kelurahan_id" required>
              <option value=""></option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Kepala Seklah</label>
          <div class="col-lg-10">
            <select class="form-control select2" name="kepalaSekolah_id" id="kepalaSekolah_id" required>
              <option value=""></option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Alamat</label>
          <div class="col-lg-10">
            <textarea name="alamat" rows="3" class="form-control" required></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Nomor Telepon</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="no_telepon" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">E-Mail</label>
          <div class="col-lg-10">
            <input class="form-control" type="email" name="email" required>
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