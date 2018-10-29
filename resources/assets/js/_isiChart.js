  // Morris
  // -----------------------------------
  (function(window, document, $, undefined) {
    'use strict';
    $(initMorris);
    function initMorris() {
      if (typeof Morris === 'undefined' || !$("#morris-donut").length) return;

      var statistikPegawai = [
        { jenjang: "jenjang 1", jumlahPegawai: 100 },
        { jenjang: "jenjang 2", jumlahPegawai: 75 },
        { jenjang: "jenjang 3", jumlahPegawai: 50 },
        { jenjang: "jenjang 4", jumlahPegawai: 75 },
        { jenjang: "jenjang 5", jumlahPegawai: 50 },
        { jenjang: "jenjang 6", jumlahPegawai: 75 },
        { jenjang: "jenjang 7", jumlahPegawai: 100 }
      ];
      var statistikJenjang = [];
      axios({
        method: 'get',
        url: '/api/data/jenjang',
      }).then((response) => {
        $.each(response.data, function(index, data) {
          statistikJenjang.push({label:data.nama, value:data.CountSekolah})
        })
        jenjangChart.setData(statistikJenjang)
      })

      // Donut Chart
      // -----------------------------------
      var jenjangChart = new Morris.Donut({
        data: [{ label: "Initial", value: 112011 }],
        xkey: 'value',
        ykeys: ["label"],
        element: 'morris-donut',
        resize: true
      });

      // Bar Chart
      // -----------------------------------
      new Morris.Bar({
        element: 'morris-bar',
        data: statistikPegawai,
        xkey: 'jenjang',
        ykeys: ["jumlahPegawai"],
        labels: ["Jumlah Pegawai"],
        xLabelMargin: 2,
        barColors: ['#23b7e5'],
        xLabelAngle: 45,
        hideHover: 'auto',
        resize: true
      });
    }
  })(window, document, window.jQuery);
