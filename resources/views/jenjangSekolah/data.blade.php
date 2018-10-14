@extends('layouts.master')
@section('content-heading','Data Jenjang')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="/jenjang-sekolah/tambah" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table width="100%" class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Jenjang</th>
                <th>Jumlah Sekolah</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($jenjang as $dataJenjang)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$dataJenjang->nama}}</td>
                  <td align="center">{{$dataJenjang->Sekolah->count()}}</td>
                  <td>
                    <a href="#" class="btn btn-labeled btn-primary btn-xs"><span class="btn-label"><i class="fa fa-edit"></i></span>Edit</a>
                    <a href="#" class="btn btn-labeled btn-danger btn-xs"><span class="btn-label"><i class="fa fa-trash"></i></span>Hapus</a>
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
