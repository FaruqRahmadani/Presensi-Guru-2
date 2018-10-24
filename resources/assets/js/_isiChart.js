// Morris
// -----------------------------------
(function(window, document, $, undefined) {
'use strict';
$(initMorris);
function initMorris() {
if (typeof Morris === 'undefined') return;
var chartdata = [
{ y: "2006", a: 100, b: 90 },
{ y: "2007", a: 75, b: 65 },
{ y: "2008", a: 50, b: 40 },
{ y: "2009", a: 75, b: 65 },
{ y: "2010", a: 50, b: 40 },
{ y: "2011", a: 75, b: 65 },
{ y: "2012", a: 100, b: 90 }
];
var donutdata = [
{ label: "Sekolah Dasar", value: 12 },
{ label: "Sekolah Menegah Pertama", value: 30 },
{ label: "Sekolah Menegah Atas", value: 20 }
];
// Donut Chart
// -----------------------------------
new Morris.Donut({
element: 'morris-donut',
data: donutdata,
colors: ['#F05051', '#5D9BEC', '#DDE6E9'],
resize: true
});
// Bar Chart
// -----------------------------------
new Morris.Bar({
element: 'morris-bar',
data: chartdata,
xkey: 'y',
ykeys: ["a", "b"],
labels: ["Kategori Absen 1", "Kategori Absen 2"],
xLabelMargin: 2,
barColors: ['#23b7e5', '#f05050'],
resize: true
});
}
})(window, document, window.jQuery);