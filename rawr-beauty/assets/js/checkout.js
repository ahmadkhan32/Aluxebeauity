/**
 * RAWR Beauty Checkout Validation & Submission
 */
(function() {
  'use strict';

  document.addEventListener('DOMContentLoaded', function() {
    var checkoutForm = document.querySelector('.rawr-checkout-form');
    if (!checkoutForm) return;

    var countrySelect = document.getElementById('rawr_checkout_country');
    var citySelect = document.getElementById('rawr_checkout_city');

    if (countrySelect && citySelect) {
      countrySelect.addEventListener('change', function() {
        var isUK = (this.value === 'United Kingdom' || this.value === 'GB');
        if (!isUK) {
          citySelect.outerHTML = '<input type="text" id="rawr_checkout_city" name="city" placeholder="Enter your city" required style="width:100%; padding:12px 16px; border:1px solid #D5D5E2; border-radius:8px; font-size:14px; outline:none;" />';
        }
      });
    }
  });
})();
