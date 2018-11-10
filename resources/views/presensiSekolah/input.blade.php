@extends('layouts.master')
@section('content-heading')
  <span>Tambah Data Presensi</span>
  <small>{{Auth::User()->Sekolah->Jenjang->nama}} - {{Auth::User()->Sekolah->nama}}</small>
@endsection
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-copy"></i></span><b>Download Template File Excel Presensi</b></a>
          <hr>
        </div>
      </div>
      <div class="card-body">
        <form action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">File Presensi</label>
            <div class="col-lg-10">
              <input class="form-control filestyle" type="file" name="berkas" data-classbutton="btn btn-secondary" data-classinput="form-control inline" data-text="Pilih Berkas" data-buttonBefore="true" data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;">
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
