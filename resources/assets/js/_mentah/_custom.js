$("#kecamatan_id").change(function(){
  var kelurahanField = $("#kelurahan_id");
  kelurahanField.find('option').remove().end()
  axios({
    method: 'get',
    url: '/api/data/kelurahan/'+$(this).val(),
  }).then((response) => {
    kelurahanField.append('<option value="">Pilih</option>')
    $.each(response.data, function(index, value) {
      kelurahanField.append('<option value="' + value.id + '">'+ value.nama + '</option>')
    })
  })
})
