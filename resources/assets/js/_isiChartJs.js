// Chart JS
// -----------------------------------

(function(window, document, $, undefined) {
    'use strict';

    $(initChartJS);

    function initChartJS() {
        if (typeof Chart === 'undefined' || !$("#chart-pegawai").length || !$("#chart-sekolah").length) return;
    
        function acakWarna() {
            var kode = '0123456789ABCDEF';
            var tagar = '#';
            for (var i = 0; i < 6; i++) {
                tagar += kode[Math.floor(Math.random() * 16)];
            }
            return tagar;
        }

        // Bar chart
        // -----------------------------------
        
        var barData = {
            labels: ['jenjang', 'jenjang', 'jenjang', 'jenjang', 'jenjang', 'jenjang', 'jenjang'],
            datasets: [{
                backgroundColor: '#23b7e5',
                borderColor: '#23b7e5',
                data: [34, 53, 21, 51, 12, 65, 76]
            }]
        };

        var barOptions = {
            legend: {
                display: false
            }
        };
        var barctx = document.getElementById('chart-pegawai').getContext('2d');
        var barChart = new Chart(barctx, {
            data: barData,
            type: 'bar',
            options: barOptions
        });

        // Pie chart
        // -----------------------------------

        var pieData = {
            labels: [
                'jenjang',
                'jenjang',
                'jenjang'
            ],
            datasets: [{
                data: [300, 50, 100],
                backgroundColor: [
                    acakWarna(),
                    acakWarna(),
                    acakWarna()
                ],
                hoverBackgroundColor: '#23b7e5'
            }]
        };

        var pieOptions = {
            legend: {
                display: false
            }
        };
        var piectx = document.getElementById('chart-sekolah').getContext('2d');
        var pieChart = new Chart(piectx, {
            data: pieData,
            type: 'pie',
            options: pieOptions
        });
    }

})(window, document, window.jQuery);