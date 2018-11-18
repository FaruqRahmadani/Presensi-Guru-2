$(".btn-presensi").click(function(){
  data = jQuery.parseJSON($(this).attr('data'))
  dataTanggal = $(this).attr('data-tanggal')
  tablePresensiModal = $("#tablePresensiModal")
  tablePresensiModal.find('tbody>tr').remove().end()
  $("#infoPresensiModalLabel").html(dataTanggal)
  $.each(data, function( index, value ) {
    tablePresensiModal.append(
      "<tr>"+
        "<td>"+(1+index)+"</td>"+
        "<td>"+(value.nama)+"</td>"+
        "<td>"+(value.last_absensi.jam_masuk||"-")+"</td>"+
        "<td>"+(value.last_absensi.jam_masuk||"-")+"</td>"+
        "<td>"+
          "<i class='fa fa-circle' style='color:"+(value.last_absensi.kategori_absen.kode_warna||"#000000")+"'></i> "+
          (value.last_absensi.kategori_absen.kode||"Tanpa Keterangan")+
        "</td>"+
        "<td style='white-space: normal;'>"+(value.last_absensi.keterangan||"-")+"</td>"+
      "</tr>"
    )
  })
})
