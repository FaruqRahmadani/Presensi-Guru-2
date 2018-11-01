$("#chart-sekolah-jenjang").ready(function(){
  if (!$("#chart-sekolah-jenjang").length) return;
  function acakWarna(index) {
    var kodeWarna = [
      '#23B7E7', '#FFB88C', '#007bff', '#6610f2', '#7266ba', '#f532e5', '#dc3545', '#fd7e14', '#fad732', '#37bc9b', '#20c997', '#17a2b8', '#6c757d', '#343a40', '#5d9cec', '#27c24c', '#23b7e5', '#ff902b', '#FEB58A', '#f05050', '#131e26', '#8bb8f1', '#2f80e7', '#43d967', '#1e983b', '#51c6ea', '#1797be', '#ffab5e', '#f77600', '#f47f7f', '#ec2121', '#58ceb1', '#2b957a', '#f763eb', '#e90bd6', '#9289ca', '#564aa3', '#243948', '#020304', '#fbe164', '#f3ca06', '#5d9cec', '#27c24c', '#23b7e5', '#ff902b', '#f05050', '#3a3f51'
    ]
    if (index>kodeWarna.length) index = index%kodeWarna.length
    return kodeWarna[index]
  }

  var pieData = {
    labels: [],
    datasets: [{
      data: [],
      backgroundColor: [],
      pointStyle: 'dash'
    }]
  }
  var pieOptions = {
    legend: {
      display: true,
      position: 'left',
    }
  }
  var piectx = document.getElementById('chart-sekolah-jenjang').getContext('2d')
  var pieChart = new Chart(piectx, {
    data: pieData,
    type: 'doughnut',
    options: pieOptions
  })

  axios({
    method: 'get',
    url: '/api/data/jenjang',
  }).then((response) => {
    $.each(response.data, function(index, value) {
      pieData.labels.push(value.nama)
      pieData.datasets[0].data.push(value.CountSekolah)
      pieData.datasets[0].backgroundColor.push(acakWarna(index))
      pieChart.update()
    })
  })
})
