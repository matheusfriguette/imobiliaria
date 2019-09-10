// let loginForm = document.forms.login;
// loginForm.addEventListener('submit', (event) => {
//   event.preventDefault();
//   if (loginForm.checkValidity() === false) {
//     loginForm.classList.add('was-validated');
//   }
// });

$(document).ready(function () {
  $('#sidebarToggle').on('click', function () {
      $('.page-sidebar').toggleClass('active');
  });
});
