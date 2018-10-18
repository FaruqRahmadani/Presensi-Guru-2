@extends('layouts.master')
@section('content-heading','Data Sekolah')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="/sekolah/tambah" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table width="100%" class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>NPSN</th>
                <th>NSS</th>
                <th>Nama Sekolah</th>
                <th>Kepala Sekolah</th>
                <th>Jenjang</th>
                <th>Status</th>
                <th>kecamatan</th>
                <th>Kelurahan</th>
                <th>Nomor Telepon</th>
                <th>E-Mail</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($sekolah as $dataSekolah)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$dataSekolah->npsn}}</td>
                  <td>{{$dataSekolah->nss}}</td>
                  <td>{{$dataSekolah->nama}}</td>
                  <td>{{$dataSekolah->NamaKepsek}}</td>
                  <td>{{$dataSekolah->Jenjang->nama}}</td>
                  <td>{{$dataSekolah->Status->nama}}</td>
                  <td>{{$dataSekolah->Kecamatan->nama}}</td>
                  <td>{{$dataSekolah->Kelurahan->nama}}</td>
                  <td>{{$dataSekolah->no_telepon}}</td>
                  <td>{{$dataSekolah->email}}</td>
                  <td>
                    <a href="#" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
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
