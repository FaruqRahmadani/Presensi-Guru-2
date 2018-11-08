@extends('layouts.master')
@section('content-heading')
<span>Tambah Jam Kerja</span>
<small>{{"{$sekolah->Jenjang->nama} - {$sekolah->nama}"}}</small>
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="{!!route('jamKerjaData')!!}" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
      </div>
    </div>
    <div class="card-body">
      <form action="{!!route('jamKerjaTambahSubmit')!!}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Hari</label>
          <div class="col-lg-10">
            <select class="form-control select2" name="hari" required>
              <option value=""></option>
              <option value="1" @unless ($hariPicked->search(1) === false) disabled @endunless>Senin</option>
              <option value="2" @unless ($hariPicked->search(2) === false) disabled @endunless>Selasa</option>
              <option value="3" @unless ($hariPicked->search(3) === false) disabled @endunless>Rabu</option>
              <option value="4" @unless ($hariPicked->search(4) === false) disabled @endunless>Kamis</option>
              <option value="5" @unless ($hariPicked->search(5) === false) disabled @endunless>Jumat</option>
              <option value="6" @unless ($hariPicked->search(6) === false) disabled @endunless>Sabtu</option>
              <option value="7" @unless ($hariPicked->search(7) === false) disabled @endunless>Minggu</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Jam Masuk</label>
          <div class="col-lg-10">
            <input class="form-control" type="time" name="jam_masuk" required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-xl-2 col-form-label text-bold">Jam Pulang</label>
          <div class="col-lg-10">
            <input class="form-control" type="time" name="jam_pulang" required>
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
