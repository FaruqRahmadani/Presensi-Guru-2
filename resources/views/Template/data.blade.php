@extends('layouts/master')
@section('content-heading','Template Data Table')
@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            <div class="card-title">Zero configuration</div>
            <div class="text-sm">DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: $().DataTable();.</div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table width="100%" class="table table-striped my-4 w-100" id="datatable1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 30; $i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>4</td>
                            <td>X</td>
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
