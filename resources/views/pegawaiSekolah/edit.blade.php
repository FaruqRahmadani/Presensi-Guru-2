@extends('layouts.master')
@section('content-heading')
<span>Edit Pegawai</span>
<small>{{"{$sekolah->Jenjang->nama} - {$sekolah->nama}"}}</small>
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="{!!route('pegawaiSekolahData')!!}" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
      </div>
    </div>
    <div class="card-body">
      <form action="{!!route('pegawaiSekolahTambahSubmit')!!}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">NIP</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="nip" value="{{$pegawai->nip}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">NUPTK</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="nuptk" value="{{$pegawai->nuptk}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Nama Pegawai</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="nama" value="{{$pegawai->nama}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Tempat Lahir</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="tempat_lahir" value="{{$pegawai->tempat_lahir}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Tanggal Lahir</label>
          <div class="col-lg-10">
            <input class="form-control" type="date" name="tanggal_lahir" value="{{$pegawai->tanggal_lahir}}" max="{{HDate::now()}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Jenis Kelamin</label>
          <div class="col-lg-10">
            <div class="form-check form-check-inline">
              <input class="form-check-input" id="inlineRadio1" type="radio" name="jenis_kelamin" value="1" @if($pegawai->jenis_kelamin == 1) checked @endif required>
              <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" id="inlineRadio2" type="radio" name="jenis_kelamin" value="2" @if($pegawai->jenis_kelamin == 2) checked @endif required>
              <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Nomor Telepon</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="no_handphone" value="{{$pegawai->no_handphone}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">E-Mail</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="email" value="{{$pegawai->email}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Alamat</label>
          <div class="col-lg-10">
            <textarea name="alamat" rows="3" class="form-control" required>{{$pegawai->alamat}}</textarea>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">ID Absensi</label>
          <div class="col-lg-10">
            <input class="form-control" type="text" name="sidikjari_id" value="{{$pegawai->sidikjari_id}}" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Foto</label>
          <div class="col-lg-10">
            <input class="form-control filestyle" type="file" name="foto" accept="image/*" data-classbutton="btn btn-secondary" data-classinput="form-control inline" data-text="Pilih Foto" data-buttonBefore="true" data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;">
            <span>Ukuran Foto 1:1 Isi hanya jika ingin ganti foto</span>
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
