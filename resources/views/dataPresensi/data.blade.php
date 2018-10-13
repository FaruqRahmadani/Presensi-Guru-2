@extends('layouts/master')
@section('content-heading','Data Presensi')
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">
                <form action="">
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Nama Sekolah</label>
                            <select class="form-control" id="select2-1" name="idSekolah" required>
                                <option value="" hidden>Pilih</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label>Tanggal Awal</label>
                            <input class="form-control" type="date" name="TanggalAwal" value="{{isset($TanggalAwal) ? $TanggalAwal : Carbon\Carbon::now()->format('Y-m-d')}}" required max="{{Carbon\Carbon::now()->addDay()->format('Y-m-d')}}" pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter">
                        </div>
                        <div class="col-lg-3">
                            <label>Tanggal Akhir</label>
                            <input class="form-control" type="date" name="TanggalAkhir" value="{{isset($TanggalAkhir) ? $TanggalAkhir : Carbon\Carbon::now()->format('Y-m-d')}}" required max="{{Carbon\Carbon::now()->addDay()->format('Y-m-d')}}" pattern="[a-zA-Z0-9]+.{0,}" title="Minimal 1 Karakter">
                        </div>
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-labeled btn-info btn" style="margin-top: 33px;">
                            <span class="btn-label"><i class="fa fa-filter"></i>
                            </span><b>Filter</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table width="100%" class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable1">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 3; $i++)
                        <tr>
                            <td align="center">{{$i+1}}</td>
                            <td>09 Agustus 2018</td>
                            <td align="center">
                                <a href="#" class="btn btn-labeled btn-info btn-xs"><span class="btn-label"><i class="fa fa-edit"></i></span>Info</a>
                                <a href="#" class="btn btn-labeled btn-primary btn-xs"><span class="btn-label"><i class="fa fa-edit"></i></span>Edit</a>
                                <a href="#" class="btn btn-labeled btn-danger btn-xs"><span class="btn-label"><i class="fa fa-trash"></i></span>Hapus</a>
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
@section('js-content')
<script>
$('#datatable1').DataTable({
'paging': true, // Table pagination
'ordering': true, // Column ordering
'info': true, // Bottom left status text
responsive: true,
// Text translation options
// Note the required keywords between underscores (e.g _MENU_)
oLanguage: {
sSearch: '<em class="fas fa-search"></em>',
sLengthMenu: '_MENU_ records per page',
info: 'Showing page _PAGE_ of _PAGES_',
zeroRecords: 'Nothing found - sorry',
infoEmpty: 'No records available',
infoFiltered: '(filtered from _MAX_ total records)',
oPaginate: {
sNext: '<em class="fa fa-caret-right"></em>',
sPrevious: '<em class="fa fa-caret-left"></em>'
}
}
});
</script>
@endsection