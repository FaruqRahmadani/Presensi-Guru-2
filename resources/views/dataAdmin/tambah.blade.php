@extends('layouts/master')
@section('content-heading','Tambah Data Admin')
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">
                <a href="/data-admin/data" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
            </div>
        </div>
        <div class="card-body">
            <form action="" class="form-horizontal">
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Nama</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="Nama" value="{{old('Nama')}}" required pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">E-mail</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="email" name="Email" value="{{old('Email')}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Foto</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="file" name="Foto" value="{{old('Foto')}}" accept="image/*">
                        <span>Ukuran Foto 1:1 </span>
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Username</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="Username" value="{{old('Username')}}" required pattern="[a-zA-Z0-9]+.{5,}" title="Minimal 6 Karakter">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Password</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="password" name="Password" value="{{old('Password')}}" required pattern=".{5,}" title="Minimal 6 Karakter">
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
@endsection