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
        "<td>"+value.pegawai.nama+"</td>"+
        "<td>"+value.jam_masuk+"</td>"+
        "<td>"+value.jam_pulang+"</td>"+
        "<td><i class='fa fa-circle' style='color:"+value.kategori_absen.kode_warna+"'></i> "+value.kategori_absen.kode+"</td>"+
        "<td>"+value.keterangan+"</td>"+
      "</tr>"
    )
  });
})
