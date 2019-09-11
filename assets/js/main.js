// let loginForm = document.forms.login;
// loginForm.addEventListener('submit', (event) => {
//   event.preventDefault();
//   if (loginForm.checkValidity() === false) {
//     loginForm.classList.add('was-validated');
//   }
// });

$(document).ready(function() {
  $('.sidebar-toggle').on('click', function() {
    $('.page-sidebar').toggleClass('active');
  });

  $('#customFile').on('change', (event) => {
    let fileReader = new FileReader();

    fileReader.onload = function(e) {
      let wrapper = $('<div class="col-md-4 py-2"></div>');
      let img = $('<img class="gallery-image">');
      img.attr('src', fileReader.result);
      img.appendTo(wrapper);
      wrapper.appendTo('#housePictures');
    };

    fileReader.readAsDataURL(event.target.files[0]);
  });
});
