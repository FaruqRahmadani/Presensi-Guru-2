@extends('layouts.master')
@section('content-heading','Tambah Data Jenjang')
@section('content')
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <div class="card-title">
          <a href="{!!route('jenjangData')!!}" class="btn btn-labeled btn-primary btn-md"><span class="btn-label"><i class="fa fa-angle-left"></i></span><b>Kembali</b></a>
        </div>
      </div>
      <div class="card-body">
        <form action="{!!route('jenjangEditSubmit', ['id' => $jenjang->UUID])!!}" class="form-horizontal" method="post">
          @csrf
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-bold">Nama Jenjang</label>
            <div class="col-xl-10">
              <input class="form-control" type="text" name="nama" value="{{$jenjang->nama}}" placeholder="Nama Jenjang" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xl-2 col-form-label text-right"></label>
            <div class="col-xl-10">
              <button type="submit" class="btn btn-labeled btn-info btn">
                <span class="btn-label"><i class="fa fa-save"></i></span><b>Simpan</b>
              </button>
              <button type="reset" class="btn btn-labeled btn-danger btn">
                <span class="btn-label"><i class="fa fa-undo"></i></span><b>Reset</b>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
