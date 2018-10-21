@extends('layouts.master')
@section('content-heading','Data Pegawai')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('pegawaiTambahForm')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table width="100%" class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
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
                <th>Sekolah Induk</th>
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
                  <td>{{$dataPegawai->Sekolah->nama}}</td>
                  <td align="center">{{$dataPegawai->sidikjari_id}}</td>
                  <td>
                    <a href="{!!route('pegawaiEditForm', ['id' => $dataPegawai->UUID])!!}" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                    <a href="#" class="btn btn-labeled btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
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
