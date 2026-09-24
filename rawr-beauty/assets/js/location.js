/**
 * Nationwide Branches Filter & Geolocation
 */
(function() {
  'use strict';
  window.rawrFilterBranches = function(query) {
    query = (query || '').toLowerCase().trim();
    var cards = document.querySelectorAll('.location-card');
    cards.forEach(function(card) {
      var text = card.textContent.toLowerCase();
      if (!query || text.indexOf(query) !== -1) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  };
})();
