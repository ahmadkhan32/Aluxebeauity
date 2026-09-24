/**
 * Product Gallery & Quick Interactions
 */
(function() {
  'use strict';
  document.addEventListener('DOMContentLoaded', function() {
    var thumbs = document.querySelectorAll('.rawr-product-gallery .thumbnails img');
    var mainImg = document.querySelector('.rawr-product-gallery .main-image img');
    if (thumbs && mainImg) {
      thumbs.forEach(function(thumb) {
        thumb.addEventListener('click', function() {
          mainImg.src = this.src;
        });
      });
    }
  });
})();
