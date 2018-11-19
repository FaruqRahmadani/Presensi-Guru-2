@extends('layouts.master')
@section('content-heading','Data Presensi')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <form action="">
            <div class="row">
              <div class="col-md-12">
                <div class="form-row">
                  <div class="col-lg-3 mb-3">
                    <label>Nama Sekolah</label>
                    <select class="form-control select2" name="idSekolah" required>
                      <option value="" hidden>Pilih</option>
                      @foreach ($sekolah as $dataSekolah)
                        <option value="{{$dataSekolah->id}}">{{$dataSekolah->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <label>Tanggal Awal</label>
                    <input class="form-control" type="date" name="TanggalAwal" value="{{now()->format('Y-m-d')}}" max="{{now()->addDay()->format('Y-m-d')}}" required>
                  </div>
                  <div class="col-lg-3 mb-3">
                    <label>Tanggal Akhir</label>
                    <input class="form-control" type="date" name="TanggalAkhir" value="{{now()->format('Y-m-d')}}" max="{{now()->addDay()->format('Y-m-d')}}" required>
                  </div>
                  <div class="col-lg-3 mb-3 text-center">
                    <label class="hidden-md-down">&nbsp;</label>
                    <div class="form-group">
                      <button type="submit" class="btn btn-labeled btn-info btn">
                        <span class="btn-label"><i class="fa fa-filter"></i>
                        </span><b>Filter</b>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
          </form>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable">
            <thead>
              <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @for ($i = 0; $i < 3; $i++)
                <tr>
                  <td>{{$i+1}}</td>
                  <td>09 Agustus 2018</td>
                  <td>
                    <a href="#" class="btn btn-labeled btn-info btn-xs"><i class="fa fa-edit"></i> Info</a>
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
