@extends('layouts.master')
@section('content-heading','Edit Profile')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
      </div>
      <div class="card-body">
        <div class="row align-items-center h-100">
          <div class="col-lg-4">            
            <center>
              <img class="img-thumbnail thumb200 rounded-circle img-file" src="{{asset(Auth::User()->foto)}}" alt="Avatar">
            </center>
          </div>
          <div class="col-lg-8">
            <form action="{!!route('profileEditSubmit')!!}" class="form-horizontal" method="post" enctype="multipart/form-data" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                <label class="col-xl-2 col-form-label text-bold">Nama</label>
                <div class="col-lg-10">
                  <input class="form-control" type="text" name="nama" value="{{Auth::User()->nama}}" required pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter" autofocus>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-2 col-form-label text-bold">E-mail</label>
                <div class="col-lg-10">
                  <input class="form-control" type="email" name="email" value="{{Auth::User()->email}}" required>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-2 col-form-label text-bold">Foto</label>
                <div class="col-lg-10">
                  <input class="form-control filestyle img-upload" type="file" name="foto" accept="image/*" data-classbutton="btn btn-secondary" data-classinput="form-control inline" data-text="Pilih Foto" data-buttonBefore="true" data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;">
                  <small>*Ukuran Foto 1:1</small>
                  <small>*Isi hanya jika ingin ganti foto</small>
                </div>
              </div>
              <hr>
              <div class="form-group row">
                <label class="col-xl-2 col-form-label text-bold">Username</label>
                <div class="col-lg-10">
                  <input class="form-control" type="text" name="username" value="{{Auth::User()->username}}" required pattern="[a-zA-Z0-9]+.{4,}" title="Minimal 5 Karakter">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-2 col-form-label text-bold">Password Lama</label>
                <div class="col-lg-10">
                  <input class="form-control" type="password" name="password_old" pattern=".{5,}" title="Minimal 6 Karakter" placeholder="Hanya isi jika ingin ganti password">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-2 col-form-label text-bold">Password Baru</label>
                <div class="col-lg-10">
                  <input class="form-control" type="password" name="password" pattern=".{5,}" title="Minimal 6 Karakter" placeholder="Hanya isi jika ingin ganti password">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xl-2 col-form-label text-bold">Konfirmasi Password Baru</label>
                <div class="col-lg-10">
                  <input class="form-control" type="password" name="password_confirmation" pattern=".{5,}" title="Minimal 6 Karakter" placeholder="Hanya isi jika ingin ganti password">
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
    </div>
  </div>
@endsection
