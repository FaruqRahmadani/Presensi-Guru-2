@extends('layouts.master')
@section('content-heading')
<span>Detail Data Presensi</span>
<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, iste.</small>{{-- Jenjang - Nama Sekolah --}}
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="/input-presensi-sekolah" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive table-bordered">
        <table class="table w-100">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Pegawai</th>
              <th>Jam Masuk</th>
              <th>Jam Keluar</th>
              <th>Absensi</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < 5; $i++)
            <tr>
              <td>{{$i+1}}</td>
              <td>ini Nama Pegawai</td>
              <td class="text-center" >ini Jam Masuk</td>
              <td class="text-center" >ini Jam Keluar</td>
              <td align="center" class="kode-warna">
                <div class="badge" style="background-color:#c1ebf8; color: #c1ebf8;">
                  <div style="filter: invert(1); font-weight: bold;">
                    Kategori Absensi
                  </div>
                </div>
              </td>
              <td class="text-center" >ini Keterangan</td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection