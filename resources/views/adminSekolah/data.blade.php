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
                            <th>Status</th>
                            <th style="width:25%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 3; $i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>Nama</td>
                            <td>Sekolah Induk</td>
                            <td>E-Mail</td>
                            <td align="center">
                                <div class="badge badge-info">Aktif</div>
                                {{-- <div class="label label-danger">Aktif</div> --}}
                            </td>
                            <td>
                                <a href="#" class="btn btn-labeled btn-primary btn-xs"><span class="btn-label"><i class="fa fa-edit"></i></span>Edit</a>
                                <a href="#" class="btn btn-labeled btn-danger btn-xs"><span class="btn-label"><i class="fa fa-trash"></i></span>Hapus</a>
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