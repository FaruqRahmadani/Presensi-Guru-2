@extends('layouts.master')
@section('content-heading','Data Pegawai')
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">
                <a href="/pegawai/tambah" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
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
                            <th>Sekolah Induk</th>
                            <th>ID Sidik Jari</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 3; $i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td align="center">NIP</td>
                            <td align="center">NUPTK</td>
                            <td>Nama</td>
                            <td>Tempat, Tanggal Lahir</td>
                            <td align="center">Jenis Kelamin</td>
                            <td>Nomor Telepon</td>
                            <td>E-mail</td>
                            <td>Sekolah Induk</td>
                            <td align="center">ID Sidik Jari</td>
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