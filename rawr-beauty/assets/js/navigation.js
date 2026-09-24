/**
 * RAWR Beauty Mobile Navigation Toggle
 */
document.addEventListener('DOMContentLoaded', function () {
  const toggleBtn = document.getElementById('rawr-mobile-menu-btn');
  const closeBtn = document.getElementById('rawr-mobile-close-btn');
  const drawer = document.getElementById('rawr-mobile-drawer');
  const backdrop = document.getElementById('rawr-mobile-backdrop');

  function openMenu() {
    if (drawer && backdrop) {
      drawer.classList.add('active');
      backdrop.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeMenu() {
    if (drawer && backdrop) {
      drawer.classList.remove('active');
      backdrop.classList.remove('active');
      document.body.style.overflow = '';
    }
  }

  if (toggleBtn) toggleBtn.addEventListener('click', openMenu);
  if (closeBtn) closeBtn.addEventListener('click', closeMenu);
  if (backdrop) backdrop.addEventListener('click', closeMenu);
});
