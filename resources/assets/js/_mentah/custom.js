$('.btn-delete').click(function(){
  var url = $(this).attr('data-url')
  var id = $(this).attr('data')
  var status = $(this).attr('status')
  if (!status) {
    swal({
      title   : "Hapus",
      text    : "Yakin Ingin Hapus Data?",
      icon    : "warning",
      buttons : [
        "Batal",
        "Hapus",
      ],
    })
    .then((hapus) => {
      if (hapus) {
        swal({
          title  : "Berhasil",
          text   : "Data Akan dihapus",
          icon   : "success",
          timer  : 2500,
        })
        window.location = url+'/'+id
      } else {
        swal({
          title  : "Batal",
          text   : "Data Batal dihapus",
          icon   : "info",
          timer  : 2500,
        })
      }
    })
  }else{
    swal({
      title   : "Hapus",
      text    : status,
      icon    : "warning",
      buttons : "OK",
    })
  }
})
