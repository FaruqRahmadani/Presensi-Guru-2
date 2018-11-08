@extends('layouts.master')
@section('content-heading')
<span>Data Pegawai</span>
<small>{{"{$sekolah->Jenjang->nama} - {$sekolah->nama}"}}</small>
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="{!!route('pegawaiSekolahTambahForm')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
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
            @foreach ($pegawai as $dataPegawai)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td align="center">{{$dataPegawai->nip}}</td>
                <td align="center">{{$dataPegawai->nuptk}}</td>
                <td>
                  <div class="inline">
                    <img class="rounded-circle thumb48" src="{{ asset($dataPegawai->foto)}}" alt="">
                  </div>
                  <div class="inline">
                    <strong>{{$dataPegawai->nama}}</strong>
                  </div>
                </td>
                <td>{{$dataPegawai->TTL}}</td>
                <td align="center">{{$dataPegawai->JenisKelaminText}}</td>
                <td>{{$dataPegawai->no_handphone}}</td>
                <td>{{$dataPegawai->email}}</td>
                <td align="center">{{$dataPegawai->sidikjari_id}}</td>
                <td>
                  <a href="{!!route('pegawaiSekolahEditForm', ['id' => $dataPegawai->UUID])!!}" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                  <button data-url="{!!route('pegawaiSekolahHapus')!!}" data="{{$dataPegawai->UUID}}" class="btn btn-labeled btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i> Hapus</button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection