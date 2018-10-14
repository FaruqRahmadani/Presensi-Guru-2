window.notif = function(tipe, judul, pesan){
  swal({
    title   : judul,
    text    : pesan,
    icon    : tipe,
  })
}
