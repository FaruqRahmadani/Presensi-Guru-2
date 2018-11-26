// chart2
// idnya : statistikPresensi
$("#statistikPresensiPegawai").ready(function () {
  if (!$("#statistikPresensiPegawai").length) return;
  id = $("#statistikPresensiPegawai").attr('data')

  function acakWarna(index) {
    var kodeWarna = [
      '#23B7E7', '#FFB88C', '#007bff', '#6610f2', '#7266ba', '#f532e5', '#dc3545', '#fd7e14', '#fad732', '#37bc9b', '#20c997', '#17a2b8', '#6c757d', '#343a40', '#5d9cec', '#27c24c', '#23b7e5', '#ff902b', '#FEB58A', '#f05050', '#131e26', '#8bb8f1', '#2f80e7', '#43d967', '#1e983b', '#51c6ea', '#1797be', '#ffab5e', '#f77600', '#f47f7f', '#ec2121', '#58ceb1', '#2b957a', '#f763eb', '#e90bd6', '#9289ca', '#564aa3', '#243948', '#020304', '#fbe164', '#f3ca06', '#5d9cec', '#27c24c', '#23b7e5', '#ff902b', '#f05050', '#3a3f51'
    ]
    if (index > kodeWarna.length) index = index % kodeWarna.length
    return kodeWarna[index]
  }

  var doughnutData = {
    labels: [],
    datasets: [{
      data: [],
      backgroundColor: [],
      pointStyle: 'dash'
    }]
  }
  var doughnutOptions = {
    legend: {
      display: true,
      position: 'right'
    }
  }
  var doughnutctx = document.getElementById('statistikPresensiPegawai').getContext('2d')
  var doughnutChart = new Chart(doughnutctx, {
    data: doughnutData,
    type: 'doughnut',
    options: doughnutOptions
  })

  axios({
    method: 'get',
    url: 'api/data/statistik-presensi/' + id,
  }).then((response) => {
    iteration = 0
    $.each(response.data, function (index, value) {
      doughnutData.labels.push(index)
      doughnutData.datasets[0].data.push(value)
      doughnutData.datasets[0].backgroundColor.push(acakWarna(iteration))
      iteration += 1
    })
    doughnutChart.update()
  })
})