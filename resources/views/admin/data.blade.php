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
        <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
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
                  <a href="{!!route('adminEditForm', ['id' => $dataUser->UUID])!!}" class="btn btn-labeled btn-primary btn-xs"><span class="btn-label"><i class="fa fa-edit"></i></span>Edit</a>
                  <button data-url="{!!route('adminHapus')!!}" data="{{$dataUser->UUID}}" @if ($dataUser->id == Auth::User()->id) status="Tidak Dapat Menghapus Data Sendiri" @endif class="btn btn-labeled btn-danger btn-xs btn-delete"><span class="btn-label"><i class="fa fa-trash"></i></span>Hapus</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  @endsection
