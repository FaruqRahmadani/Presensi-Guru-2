// Morris
// -----------------------------------
(function(window, document, $, undefined) {
'use strict';
$(initMorris);
function initMorris() {
if (typeof Morris === 'undefined') return;

var statistikPegawai = [
{ jenjang: "jenjang 1", jumlahPegawai: 100 },
{ jenjang: "jenjang 2", jumlahPegawai: 75 },
{ jenjang: "jenjang 3", jumlahPegawai: 50 },
{ jenjang: "jenjang 4", jumlahPegawai: 75 },
{ jenjang: "jenjang 5", jumlahPegawai: 50 },
{ jenjang: "jenjang 6", jumlahPegawai: 75 },
{ jenjang: "jenjang 7", jumlahPegawai: 100 }
];

var statistikJenjang = [
{ label: "Jenjang 1", value: 12 },
{ label: "Jenjang 2", value: 13 },
{ label: "Jenjang 3", value: 14 },
{ label: "Jenjang 4", value: 15 },
{ label: "Jenjang 5", value: 16 },
{ label: "Jenjang 6", value: 17 },
{ label: "Jenjang 7", value: 18 },
{ label: "Jenjang 8", value: 19 },
{ label: "Jenjang 9", value: 20 }
];

// Donut Chart
// -----------------------------------
new Morris.Donut({
data: statistikJenjang,
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