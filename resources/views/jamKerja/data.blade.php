@extends('layouts.master')
@section('content-heading')
<span>Data Jam Kerja</span>
<small>{{"{$sekolah->Jenjang->nama} - {$sekolah->nama}"}}</small>
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="{!!route('jamKerjaTambahForm')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Hari</th>
              <th>Jam Masuk</th>
              <th>Jam Keluar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($jamKerja as $dataJamKerja)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dataJamKerja->HariText}}</td>
                <td class="text-center">{{$dataJamKerja->jam_masuk}}</td>
                <td class="text-center">{{$dataJamKerja->jam_pulang}}</td>
                <td>
                  <a href="{!!route('jamKerjaEditForm', ['id' => $dataJamKerja->UUID])!!}" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                  <button data-url="" data="" class="btn btn-labeled btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i> Hapus</button>
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
