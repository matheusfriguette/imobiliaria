$(document.forms).each((index, element) => {
  $(this).on('submit', (event) => {
    event.preventDefault();
    if (element.checkValidity() === false) {
      element.classList.add('was-validated');
    }
  });
});

$(document).ready(function() {
  $('.sidebar-toggle').on('click', function() {
    $('.page-sidebar').toggleClass('active');
  });

  $(document.forms.cliente.cep).on('focusout', (event) => {
    if (event.target.validity.valid) {
      $.getJSON('https://viacep.com.br/ws/' + document.forms.cliente.cep.value + '/json/?callback=?', (data) => {
        if (!('erro' in data)) {
          $(document.forms.cliente.estado).val(data.uf);
          $(document.forms.cliente.cidade).val(data.localidade);
          $(document.forms.cliente.bairro).val(data.bairro);
          $(document.forms.cliente.rua).val(data.logradouro);
        } else {
          limpa_formulário_cep();
          alert('CEP não encontrado.');
        }
      });
    }
  });

  $(document.forms.imovel.categoria).on('change', (event) => {
    $('#cardApartamento').toggleClass('d-none');
    $('#valorImovel').toggleClass('d-none');
    $('#valorAluguel').toggleClass('d-none');
  });

  $('#fotoImovel').on('change', (event) => {
    let fileReader = new FileReader();

    fileReader.onload = function(e) {
      let wrapper = $('<div class="col-md-4 py-2"></div>');
      let img = $('<img class="gallery-image">');
      img.attr('src', fileReader.result);
      img.appendTo(wrapper);
      wrapper.appendTo('#fotosImovel');
    };

    fileReader.readAsDataURL(event.target.files[0]);
  });
});
