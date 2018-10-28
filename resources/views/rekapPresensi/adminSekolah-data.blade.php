@extends('layouts.master')
@section('content-heading')
<span>Rekap Presensi</span>
<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, iste.</small>{{-- Jenjang - Nama Sekolah --}}
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <div class="form-row align-items-center">
          <div class="col-lg-3">
            <label class="sr-only" for="inlineFormInput">Name</label>
            <div class="mb-2">
              <select class="form-control select2" name="kelurahan_id" id="kelurahan_id" required>
                <option value=""></option>
              </select>
            </div>
          </div>
          <div class="col-lg-3">
            <button type="submit" class="btn btn-labeled btn-info btn mb-2">
            <span class="btn-label"><i class="fa fa-filter"></i>
            </span><b>Filter</b>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive table-bordered">
        <table class="table w-100">
          <thead>
            <tr>
              <th>#</th>
              <th>NIP</th>
              <th>Nama Pegawai</th>
              <th style="background-color:#c1ebf8; color: #c1ebf8;" class="kode-warna ">
                  <div style="filter: invert(1); font-weight: bold;">
                    Kategori Absensi
                  </div>
              </th>
              <th align="center"  style="background-color:#c1ebf8; color: #c1ebf8;" class="kode-warna ">
                  <span style="filter: invert(1); font-weight: bold;">
                    Kategori Absensi
                  </span>
              </th>
              <th align="center" style="background-color:#c1ebf8; color: #c1ebf8;" class="kode-warna ">
                  <span style="filter: invert(1); font-weight: bold;">
                    Kategori Absensi
                  </span>
              </th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < 5; $i++)
            <tr>
              <td>{{$i+1}}</td>
              <td class="text-center" >ini NIP</td>
              <td>ini Nama Pegawai</td>
              <td class="text-center">1</td>
              <td class="text-center">2</td>
              <td class="text-center">3</td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
      <br>
      <div align="right">
        <button class="btn btn-labeled btn-success btn">
        <span class="btn-label"><i class="fa fa-print"></i>
        </span><b>Cetak</b>
        </button>
      </div>
    </div>
  </div>
</div>
@endsection