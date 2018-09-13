require('modernizr/modernizr.custom');
window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.Storages = require('js-storage/js.storage');
require('jquery.easing');
require('animo/animo');
window.screenfull = require('screenfull');
require('./_mentah/app');

