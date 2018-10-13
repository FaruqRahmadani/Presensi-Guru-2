@extends('layouts/master')
@section('content-heading','Tambah Pegawai')
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">
                <a href="/pegawai/data" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
            </div>
        </div>
        <div class="card-body">
            <form action="" class="form-horizontal">
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">NIP</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="NIP" value="{{old('NIP')}}" required pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">NUPTK</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="NUPTK" value="{{old('NUPTK')}}" pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Nama Pegawai</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="NamaPegawai" value="{{old('NamaPegawai')}}" required pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Asal Sekolah</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="select2-1" name="idSekolah" required>
                            <option value=""> Pilih </option>
                            <option value=""> </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Tempat Lahir</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="TempatLahir" value="{{old('TempatLahir')}}" required pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Tanggal Lahir</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="date" name="TanggalLahir" value="{{Carbon\Carbon::now()->format('Y-m-d')}}" required max="{{Carbon\Carbon::now()->format('Y-m-d')}}" pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Jenis Kelamin</label>
                    <div class="col-lg-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Nomor Telepon</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="NomorTelepon" value="{{old('NomorTelepon')}}" required pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">E-Mail</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="Email" value="{{old('Email')}}" required pattern=".{0,}" title="Minimal 1 Karakter">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Alamat</label>
                    <div class="col-lg-10">
                        <textarea name="" id="" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">ID Absensi</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="idSidikJari" value="{{old('idSidikJari')}}" required pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Foto</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="file" name="Foto" value="{{old('Foto')}}" accept="image/*">
                        <span class="form-text">Boleh dikosongkan</span>
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