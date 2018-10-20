@extends('layouts.master')
@section('content-heading','Data Status Sekolah')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('statusSekolahTambahForm')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Status Sekolah</th>
                <th>Jumlah Sekolah</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($status as $dataStatus)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$dataStatus->nama}}</td>
                  <td align="center">{{$dataStatus->Sekolah->count()}}</td>
                  <td>
                    <a href="{!!route('statusSekolahEditForm', ['id' => $dataStatus->UUID])!!}" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                    <button data-url="{!!route('statusSekolahHapus')!!}" data="{{$dataStatus->UUID}}" @if ($dataStatus->Sekolah->count()) status="Data Tidak Dapat Dihapus Karena Memiliki Data Sekolah" @endif class="btn btn-labeled btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i> Hapus</button>
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
