@extends('layouts.master')
@section('content-heading','Data Pegawai')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('pegawaiTambahForm')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive" id="datatable_manual">
          <div class="row">
            <div class="col-md-4">
              <label class="label-control">Jumlah Data</label>
              <select class="form-control" name="data_length" id="data_length">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
            </div>
          </div>
          <table data-url="api/data/pegawai" class="table table-striped table-bordered tabel-custom my-4 w-100">
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
              <tr id="datatable_data">
                <td data-for="id" data-target="html">DATA</td>
                <td data-for="nip" data-target="html" align="center">DATA</td>
                <td data-for="nuptk" data-target="html" align="center">DATA</td>
                <td>
                  <div class="inline">
                    <img class="rounded-circle thumb48" data-for="foto" data-target="src" src="" alt="">
                  </div>
                  <div class="inline">
                    <strong data-for="nama" data-target="html">DATA</strong>
                  </div>
                </td>
                <td data-for="TTL" data-target="html">DATA</td>
                <td data-for="JenisKelaminText" data-target="html" align="center">DATA</td>
                <td data-for="no_handphone" data-target="html">DATA</td>
                <td data-for="email" data-target="html">DATA</td>
                <td data-for="NamaSekolah" data-target="html">DATA</td>
                <td data-for="sidikjari_id" data-target="html" align="center">DATA</td>
                <td>
                  <a href="" class="btn btn-labeled btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                  <button data-url="" data="" class="btn btn-labeled btn-danger btn-xs btn-delete"><i class="fa fa-trash"></i> Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
          <ul id="page">
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
