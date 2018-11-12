@extends('layouts.master')
@section('content-heading','Data Kategori Presensi')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('kategoriPresensiTambahForm')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Kode</th>
              <th>Kode Warna</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kategoriAbsen as $dataKategoriAbsen)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dataKategoriAbsen->kode}}</td>
                <td align="center" class="kode-warna">
                  <div class="badge" style="background-color:{{$dataKategoriAbsen->kode_warna}}; color: {{$dataKategoriAbsen->kode_warna}};">
                    <div style="filter: invert(1); font-weight: bold;">
                      {{$dataKategoriAbsen->kode_warna}}
                    </div>
                  </div>
                </td>
                <td>{{$dataKategoriAbsen->keterangan}}</td>
                <td>
                  <a href="{!!route('kategoriPresensiEditForm', ['id' => $dataKategoriAbsen->UUID])!!}" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                  <button data-url="{!!route('kategoriPresensiHapus')!!}" data="{{$dataKategoriAbsen->UUID}}" class="btn btn-labeled btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i> Hapus</button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
