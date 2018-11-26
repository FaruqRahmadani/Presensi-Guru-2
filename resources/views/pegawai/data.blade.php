@extends('layouts.master')
@section('content-heading','Data Pegawai')
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <a href="{!!route('pegawaiTambahForm')!!}" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i
              class="fa fa-plus"></i></span><b>Tambah Data</b></a>
      </div>
    </div>
    <div class="card-body">
      <div class="">
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
            @foreach ($pegawai as $dataPegawai)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td align="center">{{$dataPegawai->nip}}</td>
              <td align="center">{{$dataPegawai->nuptk}}</td>
              <td>
                <div class="inline">
                  <img class="rounded-circle thumb48" src="{{ asset($dataPegawai->foto)}}" alt="">
                </div>
                <div class="inline">
                  <strong>{{$dataPegawai->nama}}</strong>
                </div>
              </td>
              <td>{{$dataPegawai->TTL}}</td>
              <td align="center">{{$dataPegawai->JenisKelaminText}}</td>
              <td>{{$dataPegawai->no_handphone}}</td>
              <td>{{$dataPegawai->email}}</td>
              <td>{{$dataPegawai->Sekolah->nama}}</td>
              <td align="center">{{$dataPegawai->sidikjari_id}}</td>
              <td>
                <button class="btn btn-labeled btn-success btn-xs" data-toggle="modal" data-target="#infoStatistikModal"><i
                    class="fa fa-chart-pie"></i> Info</button>
                <a href="{!!route('pegawaiEditForm', ['id' => $dataPegawai->UUID])!!}" class="btn btn-labeled btn-primary btn-xs"><i
                    class="fa fa-edit"></i> Edit</a>
                <button data-url="{!!route('pegawaiHapus')!!}" data="{{$dataPegawai->UUID}}" class="btn btn-labeled btn-danger btn-xs btn-delete"><i
                    class="fa fa-trash"></i> Hapus</button>
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
@section('content-additional')
<div class="modal fade modal-custom" id="infoStatistikModal" tabindex="-1" role="dialog" aria-labelledby="infoStatistikModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title "><i class="fa fa-chart-pie mr-2"></i>Statistik Pegawai</h4>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <div class="inline">
            <img class="rounded-circle thumb32 mr-3" src="{{ asset('img/pegawai/default.png') }}" alt="">
          </div>
          <div class="inline">
            <strong>Nama Pegawainya</strong>
          </div>
        </div>
        <br>
        <div>
          <canvas id="statistikPresensiPegawai" data="{{Auth::User()->sekolah_id}}"></canvas>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-times mr-2"></i> Tutup</button>
      </div>
    </div>
  </div>
</div>
@endsection