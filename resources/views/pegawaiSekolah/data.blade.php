@extends('layouts.master')
@section('content-heading')
<span>Data Pegawai</span>
<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, iste.</small>{{-- Jenjang - Nama Sekolah --}}
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="/tambah-pegawai-sekolah" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>NIP</th>
              <th>NUPTK</th>
              <th>Nama</th>
              <th>Tempat, Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Nomor Telepon</th>
              <th>E-mail</th>
              <th>ID Sidik Jari</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < 12; $i++)
            <tr>
              <td>{{$i+1}}</td>
              <td align="center">nip</td>
              <td align="center">ini nomor nuptk</td>
              <td>
                <div class="inline">
                  <img class="rounded-circle thumb48" src="/public/img/pegawai/default.png" alt="">
                </div>
                <div class="inline">
                  <strong>ini nama pegawai</strong>
                </div>
              </td>
              <td>ini TTL</td>
              <td align="center">ini jenis kelamin</td>
              <td>ini nomor telepom</td>
              <td>ini email</td>
              <td align="center">ini id sidik jari</td>
              <td>
                <a href="" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                <button data-url="" data="" class="btn btn-labeled btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i> Hapus</button>
              </td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection