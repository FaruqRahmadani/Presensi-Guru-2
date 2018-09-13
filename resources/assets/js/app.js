require('modernizr/modernizr.custom');
window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.Storages = require('js-storage/js.storage');
require('jquery.easing');
require('animo/animo');
screenfull = require('screenfull');
require('datatables.net/js/jquery.dataTables');
require('datatables.net-bs4/js/dataTables.bootstrap4');
require('datatables.net-buttons/js/dataTables.buttons');
require('datatables.net-responsive/js/dataTables.responsive');
window.Raphael = require('raphael/raphael');
require('morris.js.so/morris');
require('./_mentah/dataMorris');
require('./_mentah/app');
require('./_mentah/custom');

