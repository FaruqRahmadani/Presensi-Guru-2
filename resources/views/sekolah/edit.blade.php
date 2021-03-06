@extends('layouts.master')
@section('content-heading','Edit Data Sekolah')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('sekolahData')!!}" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
        </div>
      </div>
      <div class="card-body">
        <form action="{!!route('sekolahEditSubmit', ['id' => $sekolah->UUID])!!}" class="form-horizontal" method="post">
          @csrf
          <div class="form-group row row">
            <label class="col-xl-2 col-form-label text-bold">NPSN</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="npsn" value="{{$sekolah->npsn}}" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">NSS</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="nss" value="{{$sekolah->nss}}" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Nama Sekolah</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="nama" value="{{$sekolah->nama}}" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Jenjang</label>
            <div class="col-lg-10">
              <select class="form-control select2" name="jenjang_id" required>
                <option value=""></option>
                @foreach ($jenjang as $dataJenjang)
                  <option value="{{$dataJenjang->id}}" @if ($dataJenjang->id == $sekolah->jenjang_id) selected @endif>{{$dataJenjang->nama}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Status Sekolah</label>
            <div class="col-lg-10">
              <select class="form-control select2" name="status_id" required>
                <option value=""></option>
                @foreach ($status as $dataStatus)
                  <option value="{{$dataStatus->id}}" @if ($dataStatus->id == $sekolah->status_id) selected @endif>{{$dataStatus->nama}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Kecamatan</label>
            <div class="col-lg-10">
              <select class="form-control select2" name="kecamatan_id" id="kecamatan_id" required>
                <option value=""></option>
                @foreach ($kecamatan as $dataKecamatan)
                  <option value="{{$dataKecamatan->id}}" @if ($dataKecamatan->id == $sekolah->kecamatan_id) selected @endif>{{$dataKecamatan->nama}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Kelurahan</label>
            <div class="col-lg-10">
              <select class="form-control select2" name="kelurahan_id" id="kelurahan_id" required>
                <option value=""></option>
                @foreach ($kelurahan as $dataKelurahan)
                  <option value="{{$dataKelurahan->id}}" @if ($dataKelurahan->id == $sekolah->kelurahan_id) selected @endif>{{$dataKelurahan->nama}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Alamat</label>
            <div class="col-lg-10">
              <textarea name="alamat" rows="3" class="form-control" required>{{$sekolah->alamat}}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Nomor Telepon</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="no_telepon" value="{{$sekolah->no_telepon}}" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">E-Mail</label>
            <div class="col-lg-10">
              <input class="form-control" type="email" name="email" value="{{$sekolah->email}}" required>
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
