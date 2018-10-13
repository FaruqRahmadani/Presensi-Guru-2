@extends('layouts/master')
@section('content-heading','Tambah Data Sekolah')
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">
                <a href="/sekolah/data" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
            </div>
        </div>
        <div class="card-body">
            <form action="" class="form-horizontal">
                <div class="form-group row row">
                    <label class="col-xl-2 col-form-label text-bold">NPSN</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="NPSN" value="" required pattern=".{0,}" title="Minimal 1 Karakter" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">NSS</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="NSS" value="" required pattern=".{0,}" title="Minimal 1 Karakter" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Nama Sekolah</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="NamaSekolah" value="" required pattern=".{0,}" title="Minimal 1 Karakter" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Jenjang</label>
                    <div class="col-lg-10">
                        <select class="form-control" name="idJenjang" id="select2-1" required>
                            <option value="">Pilih</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Status Sekolah</label>
                    <div class="col-lg-10">
                        <select class="form-control" name="idStatus" id="select2-2" required>
                            <option value="">Pilih</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Kecamatan</label>
                    <div class="col-lg-10">
                        <select class="form-control" name="idKecamatan" id="select2-3" required>
                            <option value="">Pilih</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Kelurahan</label>
                    <div class="col-lg-10">
                        <select class="form-control" name="idKelurahan" id="select2-4" required>
                            <option value="">Pilih</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Alamat</label>
                    <div class="col-lg-10">
                        <textarea name="alamat" id="" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Nomor Telepon</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="text" name="NomorTelepon" value="" required pattern=".{0,}" title="Minimal 1 Karakter" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">E-Mail</label>
                    <div class="col-lg-10">
                        <input class="form-control" type="email" name="Email" value="" required pattern=".{0,}" title="Minimal 1 Karakter" autofocus>
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