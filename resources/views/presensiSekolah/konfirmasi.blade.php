@extends('layouts.master')
@section('content-heading')
  <span>Konfirmasi Presensi</span>
  <small>{{Auth::User()->Sekolah->Jenjang->nama}} - {{Auth::User()->Sekolah->nama}}</small>
@endsection
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-body">
        <div class="table-responsive">
          <form action="{!!route('presensiSekolahConfirmSubmit')!!}" method="post">
            @csrf
            <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Pegawai</th>
                  <th>Tanggal</th>
                  <th>Jam Masuk</th>
                  <th>Jam Keluar</th>
                  <th>Id Sidik Jari</th>
                  <th>Kategori Absen</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dataImport as $valueImport)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$valueImport["pegawai"]["nama"]}}</td>
                    <td>{{HDate::FormatDate($valueImport["tanggal"])}}</td>
                    <td>{{$valueImport["jam_masuk"]}}</td>
                    <td>{{$valueImport["jam_keluar"]}}</td>
                    <td>{{$valueImport["sidikjari_id"]}}</td>
                    <td>
                      <select class="form-control select2" name="data[{{$loop->iteration}}][kategori_absen_id]" required>
                        <option value=""></option>
                        @foreach ($kategoriAbsen as $dataKategoriAbsen)
                          <option value="{{$dataKategoriAbsen->id}}">{{$dataKategoriAbsen->kode}}</option>
                        @endforeach
                      </select>
                    </td>
                    <td>
                      <input type="text" name="data[{{$loop->iteration}}][keterangan]" class="form-control">
                    </td>
                  </tr>
                  <input type="text" name="data[{{$loop->iteration}}][data]" value="{{encrypt($valueImport)}}" class="d-none">
                @endforeach
              </tbody>
            </table>
            <center>    
              <button type="submit" class="btn btn-labeled btn-info btn mt-3">
                <span class="btn-label"><i class="fa fa-save"></i></span><b>Simpan</b>
              </button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
