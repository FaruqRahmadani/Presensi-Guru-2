@extends('layouts/master')
@section('content-heading','Tambah Pegawai')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('pegawaiData')!!}" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
        </div>
      </div>
      <div class="card-body">
        <form action="" class="form-horizontal">
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">NIP</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="nip" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">NUPTK</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="nuptk" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Nama Pegawai</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="nama" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Asal Sekolah</label>
            <div class="col-lg-10">
              <select class="form-control select2" name="sekolah_id" required>
                <option value=""> Pilih </option>
                <option value="a">aa </option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Tempat Lahir</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="tempat_lahir" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Tanggal Lahir</label>
            <div class="col-lg-10">
              <input class="form-control" type="date" name="tanggal_lahir" value="{{HDate::now()}}" max="{{HDate::now()}}" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Jenis Kelamin</label>
            <div class="col-lg-10">
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="inlineRadio1" type="radio" name="jenis_kelamin" value="1" required>
                <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" id="inlineRadio2" type="radio" name="jenis_kelamin" value="2" required>
                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Nomor Telepon</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="nomor_handphone" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">E-Mail</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="email" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Alamat</label>
            <div class="col-lg-10">
              <textarea name="alamat" rows="3" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">ID Absensi</label>
            <div class="col-lg-10">
              <input class="form-control" type="text" name="idSidikJari" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Foto</label>
            <div class="col-lg-10">
              <input class="form-control" type="file" name="Foto" accept="image/*">
              <small>Boleh dikosongkan</small>
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
