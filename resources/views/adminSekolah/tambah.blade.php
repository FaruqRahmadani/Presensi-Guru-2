@extends('layouts.master')
@section('content-heading','Tambah Data Admin Sekolah')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('adminSekolahData')!!}" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
        </div>
      </div>
      <div class="card-body">
        <form action="{!!route('adminSekolahTambahSubmit')!!}" class="form-horizontal" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Nama</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="nama" value="{{old('nama')}}" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">E-mail</label>
            <div class="col-lg-10">
              <input class="form-control" type="email" name="email" value="{{old('email')}}" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Sekolah Induk</label>
            <div class="col-lg-10">
              <select class="form-control select2" name="sekolah_id" required>
                <option value="" hidden> Pilih </option>
                @foreach ($sekolah as $dataSekolah)
                  <option value="{{$dataSekolah->id}}" @if ($dataSekolah->id == old('sekolah_id')) selected @endif>{{$dataSekolah->nama}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Foto</label>
            <div class="col-lg-10">
               <input class="form-control filestyle" type="file" name="foto" accept="image/*" data-classbutton="btn btn-secondary" data-classinput="form-control inline" data-text="Pilih Foto" data-buttonBefore="true" data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;">
              <span>Ukuran Foto 1:1 </span>               
            </div>
          </div>
          <hr>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Username</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="username" value="{{old('username')}}" required pattern=".{5,}" title="Minimal 6 Karakter">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Password</label>
            <div class="col-lg-10">
              <input class="form-control" type="password" name="password" required pattern=".{5,}" title="Minimal 6 Karakter">
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
