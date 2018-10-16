@extends('layouts.master')
@section('content-heading','Data Admin')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('adminTambahForm')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table width="100%" class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>E-Mail</th>
                <th>Username</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user as $dataUser)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>
                    <div class="inline">
                      <img class="rounded-circle thumb48" src="{{ asset($dataUser->foto)}}" alt="">
                    </div>
                    <div class="inline">
                      <strong>{{$dataUser->nama}}</strong>
                    </div>
                  </td>
                  <td>{{$dataUser->email}}</td>
                  <td>{{$dataUser->username}}</td>
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
