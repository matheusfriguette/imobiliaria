let loginForm = document.forms.login;
loginForm.addEventListener('submit', (event) => {
  event.preventDefault();
  if (loginForm.checkValidity() === false) {
    loginForm.classList.add('was-validated');
  }
});
