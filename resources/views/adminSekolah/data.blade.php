@extends('layouts/master')
@section('content-heading','Data Admin Sekolah')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="/admin-sekolah/tambah" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table width="100%" class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Sekolah Induk</th>
                <th>E-Mail</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user as $dataUser)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$dataUser->nama}}</td>
                  <td>{{$dataUser->Sekolah->nama}}</td>
                  <td>{{$dataUser->email}}</td>
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
