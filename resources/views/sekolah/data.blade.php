@extends('layouts/master')
@section('content-heading','Data Sekolah')
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">
                <a href="/sekolah/tambah" class="btn btn-labeled btn-info btn-md"><span class="btn-label"><i class="fa fa-plus"></i></span><b>Tambah Data</b></a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table width="100%" class="table table-striped table-bordered tabel-custom my-4 w-100" id="datatable1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NPSN</th>
                            <th>NSS</th>
                            <th>Nama Sekolah</th>
                            <th>Kepala Sekolah</th>
                            <th>Jenjang</th>
                            <th>Status</th>
                            <th>kecamatan</th>
                            <th>Kelurahan</th>
                            <th>Nomor Telepon</th>
                            <th>E-Mail</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 3; $i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>NPSN</td>
                            <td>NSS</td>
                            <td>Nama Sekolah</td>
                            <td>Kepala Sekolah</td>
                            <td>Jenjang</td>
                            <td>Status</td>
                            <td>kecamatan</td>
                            <td>Kelurahan</td>
                            <td>Nomor Telepon</td>
                            <td>E-Mail</td>
                            <td>
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