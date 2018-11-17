$(".btn-presensi").click(function(){
  data = jQuery.parseJSON($(this).attr('data'))
  dataTanggal = $(this).attr('data-tanggal')
  tablePresensiModal = $("#tablePresensiModal")
  tablePresensiModal.find('tbody>tr').remove().end()
  $("#infoPresensiModalLabel").html(dataTanggal)
  $.each(data, function( index, value ) {
    tablePresensiModal.append(
      "<tr>"+
        "<td>"+(index+1)+"</td>"+
        "<td>"+value.nama+"</td>"+
        "<td>"+(value.absensi[0]?value.absensi[0].jam_masuk:"-")+"</td>"+
        "<td>"+(value.absensi[0]?value.absensi[0].jam_pulang:"-")+"</td>"+
        "<td><i class='fa fa-circle' style='color:"+(value.absensi[0]?value.absensi[0].kategori_absen.kode_warna:"#000000")+"'></i> "+(value.absensi[0]?value.absensi[0].kategori_absen.kode:"Tanpa Keterangan")+"</td>"+
        "<td>"+(value.absensi[0]?value.absensi[0].keterangan:"-")+"</td>"+
      "</tr>"
    )
  });
})
