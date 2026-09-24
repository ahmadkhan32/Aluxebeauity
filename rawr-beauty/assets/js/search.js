/**
 * Live Predictive Search
 */
(function() {
  'use strict';
  document.addEventListener('DOMContentLoaded', function() {
    var searchInput = document.querySelector('.rawr-header-search input[type="search"]');
    if (searchInput) {
      searchInput.addEventListener('focus', function() {
        this.parentElement.style.borderColor = '#C9A84C';
      });
      searchInput.addEventListener('blur', function() {
        this.parentElement.style.borderColor = 'rgba(255,255,255,0.15)';
      });
    }
  });
})();
