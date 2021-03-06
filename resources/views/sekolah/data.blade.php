@extends('layouts.master')
@section('content-heading','Data Sekolah')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('sekolahTambahForm')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
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
                <td>{{$dataSekolah->KepalaSekolah->nama}}</td>
                <td>{{$dataSekolah->Jenjang->nama}}</td>
                <td>{{$dataSekolah->Status->nama}}</td>
                <td>{{$dataSekolah->Kecamatan->nama}}</td>
                <td>{{$dataSekolah->Kelurahan->nama}}</td>
                <td>{{$dataSekolah->no_telepon}}</td>
                <td>{{$dataSekolah->email}}</td>
                <td>
                  <a href="{!!route('sekolahEditForm', ['id' => $dataSekolah->UUID])!!}" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                  <button data-url="{!!route('sekolahHapus')!!}" data="{{$dataSekolah->UUID}}" @if ($dataSekolah->Pegawai->count()) status="Data Tidak Dapat Dihapus Karena Memiliki Data Pegawai" @endif class="btn btn-labeled btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i> Hapus</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  @endsection
