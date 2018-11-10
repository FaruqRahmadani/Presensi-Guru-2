@extends('layouts.master')
@section('content-heading')
<span>Konfirmasi Presensi</span>
<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, iste.</small>{{-- Jenjang - Nama Sekolah --}}
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-body">
      <div class="table-responsive">
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
          <form action="" method="post">
            <tbody>
              @foreach ($dataImport as $valueImport)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$valueImport["nama"]}}</td>
                  <td>{{HDate::FormatDate($valueImport["tanggal"])}}</td>
                  <td>{{$valueImport["jammasuk"]}}</td>
                  <td>{{$valueImport["jamkeluar"]}}</td>
                  <td>{{$valueImport["sidikjari_id"]}}</td>
                  <td>
                    <select class="form-control select2" name="kategori_absen_id">
                      <option value=""></option>
                      @foreach ($kategoriAbsen as $dataKategoriAbsen)
                        <option value="{{$dataKategoriAbsen->id}}">{{$dataKategoriAbsen->kode}}</option>
                      @endforeach
                    </select>
                  </td>
                  <td>
                    <input type="keterangan[]" name="kategori" class="form-control">
                  </td>
                </tr>
              @endforeach
            </tbody>
          </form>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
