// Select2
// -----------------------------------

(function(window, document, $, undefined) {
  'use strict';

  $(initSelect2);

  function initSelect2() {

    if (!$.fn.select2) return;

    // Select 2

    $('.select2').select2({
      placeholder: "Pilih",
      theme:'bootstrap4'
    });
  }

})(window, document, window.jQuery);
