/**
 * Mobile Navigation Drawer Toggle
 */
(function() {
  'use strict';
  document.addEventListener('DOMContentLoaded', function() {
    var toggle = document.querySelector('.mobile-menu-toggle');
    var menu = document.querySelector('.mobile-navigation-drawer');
    var closeBtn = document.querySelector('.mobile-menu-close');

    if (toggle && menu) {
      toggle.addEventListener('click', function() {
        menu.classList.add('is-open');
      });
    }
    if (closeBtn && menu) {
      closeBtn.addEventListener('click', function() {
        menu.classList.remove('is-open');
      });
    }
  });
})();
