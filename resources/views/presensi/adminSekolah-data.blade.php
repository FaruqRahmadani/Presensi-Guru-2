@extends('layouts.master')
@section('content-heading')
<span>Data Presensi</span>
<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, iste.</small>{{-- Jenjang - Nama Sekolah --}}
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="/input-presensi-sekolah" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < 12; $i++)
            <tr>
              <td>{{$i+1}}</td>
              <td>ini Tanggal</td>
              <td>
                <a href="/info-presensi-sekolah" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-info-circle"></i> Info</a>
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