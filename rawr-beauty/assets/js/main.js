/**
 * RAWR Beauty Theme Main JS
 */
document.addEventListener('DOMContentLoaded', function () {
  console.log('RAWR Beauty Theme initialized');

  // Sticky Header elevation on scroll
  const header = document.querySelector('.rawr-main-header');
  if (header) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 40) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  }
});
