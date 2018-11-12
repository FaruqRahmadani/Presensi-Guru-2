$('#datatable').DataTable({
  'paging': true,
  'ordering': true,
  'info': true,
  responsive: true,
  oLanguage: {
    sSearch: '<em class="fas fa-search"></em>',
    sEmptyTable:   "Tidak ada data yang tersedia pada tabel ini",
    sProcessing:   "Sedang memproses...",
    sLengthMenu:   "Tampilkan _MENU_ entri",
    sZeroRecords:  "Tidak ditemukan data yang sesuai",
    sInfo:         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
    sInfoEmpty:    "Menampilkan 0 sampai 0 dari 0 entri",
    sInfoFiltered: "(disaring dari _MAX_ entri keseluruhan)",
    oPaginate: {
      sNext: '<em class="fa fa-caret-right"></em>',
      sPrevious: '<em class="fa fa-caret-left"></em>'
    }
  }
});
$("#datatable").ready(function(){
  datatable = $("#datatable")
  datatableWidth = datatable.width()
  parentWidth = datatable.parent().width()
  if (datatableWidth > parentWidth) datatable.addClass('table-responsive')
})
