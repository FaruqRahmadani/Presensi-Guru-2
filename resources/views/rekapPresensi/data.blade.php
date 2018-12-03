@extends('layouts.master')
@section('content-heading')
<span>Rekap Presensi</span>
<small>{{Auth::User()->Sekolah->Jenjang->nama}} - {{Auth::User()->Sekolah->nama}}</small>
@endsection
@section('content')
<div class="container-fluid">
  <div class="card card-default">
    <div class="card-header">
      <div class="card-title">
        <div class="row">
          <div class="col-md-12">
            <form action="{!!route('laporanRekap')!!}" method="post">
              <div class="form-row">
                @csrf
                <div class="col-lg-4">
                  <label class="sr-only" for="inlineFormInput">Name</label>
                  <div class="mb-2">
                    <select class="form-control select2" name="periode" required>
                      @foreach ($periode as $dataPeriode)
                      <option value="{{$dataPeriode}}" @if ($dataPeriode==$selectedPeriode) selected @endif>{{HDate::formatPeriode($dataPeriode)}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <button type="submit" class="btn btn-labeled btn-info btn mb-2">
                    <span class="btn-label"><i class="fa fa-filter"></i>
                    </span><b>Filter</b>
                  </button>
                </div>
              </form>
              <form class="" action="{!!route('laporanRekapCetak')!!}" method="post" target="_blank">
                @csrf
                <input type="hidden" name="data" value="{{encrypt($pegawai)}}">
                <input type="hidden" name="periode" value="{{encrypt($selectedPeriode)}}">
                <div class="col-lg-4">
                  <button class="btn btn-labeled btn-success btn">
                    <span class="btn-label"><i class="fa fa-print"></i>
                    </span><b>Cetak</b>
                  </button>
                </div>
              </div>
            </form>
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
              @foreach ($kategoriAbsen as $dataKategoriAbsen)
              <th>
                <i class="fa fa-circle" style="color: {{$dataKategoriAbsen->kode_warna}}"></i>
                {{$dataKategoriAbsen->kode}}
              </th>
              @endforeach
              <th>
                <i class="fa fa-circle" style="color: #000000"></i>
                Tanpa Keterangan
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pegawai as $dataPegawai)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td class="text-center">{{$dataPegawai->nip}}</td>
              <td>{{$dataPegawai->nama}}</td>
              @foreach ($kategoriAbsen as $dataKategoriAbsen)
              <td class="text-center">{{$dataPegawai->Absensi->where('kategori_absen_id', $dataKategoriAbsen->id)->count()}}</td>
              @endforeach
              <td>{{$selectedPeriode->daysInMonth - $dataPegawai->Absensi->count()}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <br>
    </div>
  </div>
</div>
@endsection
