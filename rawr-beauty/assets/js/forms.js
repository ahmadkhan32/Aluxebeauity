/**
 * RAWR Beauty Frontend Forms Validation
 */
document.addEventListener('DOMContentLoaded', function () {
  const forms = document.querySelectorAll('form');
  forms.forEach(function (f) {
    f.addEventListener('submit', function (e) {
      // Allow default or intercept for AJAX
      console.log('Form submitted:', f.id);
    });
  });
});
