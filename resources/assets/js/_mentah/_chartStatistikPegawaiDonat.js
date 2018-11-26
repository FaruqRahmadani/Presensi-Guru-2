$("#datatable").on("click", ".btn-statistik-pegawai", function(){
  id = $(this).attr("data")
  doughnutData = {
    labels: [],
    datasets: [{
      data: [],
      backgroundColor: [],
      pointStyle: 'dash'
    }]
  }
  doughnutOptions = {
    legend: {
      display: true,
      position: 'right'
    }
  }
  doughnutctx = document.getElementById('statistikPresensiPegawai').getContext('2d')
  doughnutChart = new Chart(doughnutctx, {
    data: doughnutData,
    type: 'doughnut',
    options: doughnutOptions
  })
  axios({
    method: 'get',
    url: 'api/data/statistik-presensi/pegawai/'+id,
  }).then((response) => {
    $("#dataPegawai").find("img").attr("src", response.data.pegawai.foto)
    $("#dataPegawai").find("strong").html(response.data.pegawai.nama)
    $.each(response.data.statistik, function (index, value) {
      doughnutData.labels.push(index)
      doughnutData.datasets[0].data.push(value.jumlah)
      doughnutData.datasets[0].backgroundColor.push(value.kode_warna)
    })
    doughnutChart.update()
  })
})
