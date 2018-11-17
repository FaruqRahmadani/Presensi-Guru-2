@extends('layouts.master')
@section('content-heading')
  <span>Data Presensi</span>
  <small>{{Auth::User()->Sekolah->Jenjang->nama}} - {{Auth::User()->Sekolah->nama}}</small>
@endsection
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('presensiSekolahInputForm')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Tanggal</th>
                @foreach ($kategoriAbsen as $dataKategoriAbsen)
                  <th><i class="fa fa-circle" style="color:{{$dataKategoriAbsen->kode_warna}}"></i> {{$dataKategoriAbsen->kode}}</th>
                @endforeach
                <th><i class="fa fa-circle text-dark"></i> Tanpa Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($absensi as $tanggal=>$dataAbsensi)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{HDate::formatDate($tanggal)}}</td>
                  @foreach ($kategoriAbsen as $dataKategoriAbsen)
                    <td class="text-center">{{$dataAbsensi->where('kategori_absen_id', $dataKategoriAbsen->id)->count()}}</td>
                  @endforeach
                  <td class="text-center">{{$pegawai->count() - $dataAbsensi->count()}}</td>
                  <td>
                    <button class="btn btn-labeled btn-primary btn-xs btn-presensi" data-toggle="modal" data-target="#infoPresensiModal" data-tanggal="{{HDate::formatDate($tanggal)}}" data="{{$pegawai->with(['Absensi' => function($query) use ($tanggal){ $query->whereDate('tanggal', $tanggal); $query->with('KategoriAbsen');}])->get()}}"><i class="fa fa-info-circle"></i> Info</button>
                  </td>
                </tr>
                {{-- {{dd($pegawai->with(['Absensi' => function($query) use ($tanggal){
                  $query->whereDate('tanggal', $tanggal);
                }])->get())}} --}}
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('content-additional')
  <div class="modal fade" id="infoPresensiModal" tabindex="-1" role="dialog" aria-labelledby="infoPresensiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="infoPresensiModalLabel">Tanggal</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="tablePresensiModal">
            <thead>
              <th>No</th>
              <th>Nama Pegawai</th>
              <th>Jam Masuk</th>
              <th>Jam Keluar</th>
              <th>Kategori Presensi</th>
              <th>Keterangan</th>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
@endsection
