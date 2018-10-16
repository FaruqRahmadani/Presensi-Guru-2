@extends('layouts/master')
@section('content-heading','Tambah Kategori Presensi')
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">
                <a href="{!!route('kategoriPresensiData')!!}" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
            </div>
        </div>
        <div class="card-body">
            <form action="" class="form-horizontal">
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Kode</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text" placeholder="Kode">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Keterangan</label>
                    <div class="col-xl-10">
                        <input class="form-control" type="text" placeholder="Keterangan">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-2 col-form-label text-bold">Kode Warna</label>
                    <div class="col-xl-10">
                        <div class="input-group demo-colorpicker">
                            <input class="form-control" type="text" value="#000">
                            <div class="input-group-append input-group-addon">
                                <div class="input-group-text"><i></i></div>
                            </div>
                        </div>
                        <span class="form-text"><i>Untuk memilih kode warna dengan klik kotak di ujung kanan kolom masukan</i></span>
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
