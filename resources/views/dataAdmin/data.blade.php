@extends('layouts/master')
@section('content-heading','Data Admin')
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">
                <a href="/data-admin/tambah" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
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
                        @for ($i = 0; $i < 3; $i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>
                                <div class="inline">
                                    <img class="rounded-circle thumb48" src="{{ asset('img/user/03.jpg') }}" alt="">
                                </div>
                                <div class="inline">
                                    <strong>Nama</strong>
                                </div>
                            </td>
                            <td>E-Mail</td>
                            <td>Username</td>
                            <td>
                                <a href="#" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-labeled btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
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