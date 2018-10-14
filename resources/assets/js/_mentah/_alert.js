window.notif = function(tipe, judul, pesan){
  swal({
    title   : judul,
    text    : pesan,
    icon    : tipe,
  })
}
$( "#logout" ).click(function() {
  swal({
    title   : "Logout",
    text    : "Apakah anda yakin ingin keluar ?",
    icon    : "warning",
    buttons : [
      "Batal",
      "Logout",
    ],
  })
  .then((logout) => {
    if (logout) {
      swal({
        title  : "Logout",
        text   : "Anda Telah Logout",
        icon   : "success",
        timer  : 2500,
      })
      window.location = "/logout"
    } else {
      swal({
        title  : "Batal Logout",
        text   : "Anda Batal Logout",
        icon   : "info",
        timer  : 2500,
      })
    }
  })
})
