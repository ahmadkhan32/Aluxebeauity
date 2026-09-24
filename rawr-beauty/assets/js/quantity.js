/**
 * Quantity Controller
 */
(function() {
  'use strict';
  document.addEventListener('click', function(e) {
    if (e.target.matches('.qty-btn-minus')) {
      var input = e.target.parentElement.querySelector('input[type="number"]');
      if (input && input.value > 1) {
        input.value = parseInt(input.value) - 1;
        input.dispatchEvent(new Event('change', { bubbles: true }));
      }
    }
    if (e.target.matches('.qty-btn-plus')) {
      var input = e.target.parentElement.querySelector('input[type="number"]');
      if (input) {
        input.value = parseInt(input.value) + 1;
        input.dispatchEvent(new Event('change', { bubbles: true }));
      }
    }
  });
})();
