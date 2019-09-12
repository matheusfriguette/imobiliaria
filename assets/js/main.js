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

  // $(document.forms.funcionario.cep).on('focusin', (event) => {
  //   $('#cepInvalido').removeClass('d-block');
  //   $('#cepInvalido').addClass('d-none');
  // });

  // $(document.forms.funcionario.cep).on('focusout', (event) => {
  //   if (event.target.validity.valid) {
  //     $.getJSON('https://viacep.com.br/ws/' + document.forms.funcionario.cep.value + '/json/?callback=?', (data) => {
  //       console.log(data);
  //       if (data.erro === undefined) {
  //         $(document.forms.funcionario.estado).val(data.uf);
  //         $(document.forms.funcionario.cidade).val(data.localidade);
  //         $(document.forms.funcionario.bairro).val(data.bairro);
  //         $(document.forms.funcionario.rua).val(data.logradouro);
  //       } else {
  //         $('#cepInvalido').toggleClass('d-block');
  //         $('#cepInvalido').toggleClass('d-none');
  //       }
  //     });
  //   }
  // });

  // $(document.forms.cliente.cep).on('focusin', (event) => {
  //   $('#cepInvalido').removeClass('d-block');
  //   $('#cepInvalido').addClass('d-none');
  // });

  // $(document.forms.cliente.cep).on('focusout', (event) => {
  //   if (event.target.validity.valid) {
  //     $.getJSON('https://viacep.com.br/ws/' + document.forms.cliente.cep.value + '/json/?callback=?', (data) => {
  //       console.log(data);
  //       if (data.erro === undefined) {
  //         $(document.forms.cliente.estado).val(data.uf);
  //         $(document.forms.cliente.cidade).val(data.localidade);
  //         $(document.forms.cliente.bairro).val(data.bairro);
  //         $(document.forms.cliente.rua).val(data.logradouro);
  //       } else {
  //         $('#cepInvalido').toggleClass('d-block');
  //         $('#cepInvalido').toggleClass('d-none');
  //       }
  //     });
  //   }
  // });

  $(document.forms.imovel.cep).on('focusin', (event) => {
    $('#cepInvalido').removeClass('d-block');
    $('#cepInvalido').addClass('d-none');
  });

  $(document.forms.imovel.cep).on('focusout', (event) => {
    if (event.target.validity.valid) {
      $.getJSON('https://viacep.com.br/ws/' + document.forms.imovel.cep.value + '/json/?callback=?', (data) => {
        console.log(data);
        if (data.erro === undefined) {
          $(document.forms.imovel.estado).val(data.uf);
          $(document.forms.imovel.cidade).val(data.localidade);
          $(document.forms.imovel.bairro).val(data.bairro);
          $(document.forms.imovel.rua).val(data.logradouro);
        } else {
          $('#cepInvalido').toggleClass('d-block');
          $('#cepInvalido').toggleClass('d-none');
        }
      });
    }
  });

  $(document.forms.imovel.categoria).on('change', (event) => {
    $('#cardApartamento').toggleClass('d-none');
    $('#valorImovel').toggleClass('d-none');
    $('#valorAluguel').toggleClass('d-none');
  });

  let listaFotos = [];

  $(document.forms.imovel.fotos).on('change', (event) => {
    if (listaFotos.length < 6) {
      listaFotos.push(document.forms.imovel.fotos.files[0]);
      document.forms.imovel.numeroFotos.value = listaFotos.length;

      let fileReader = new FileReader();

      fileReader.onload = function(e) {
        let wrapper = $('<div class="col-md-4 py-2"></div>');
        let img = $('<img class="gallery-image">');
        img.attr('src', fileReader.result);
        img.appendTo(wrapper);
        wrapper.appendTo('#fotosImovel');
      };

      fileReader.readAsDataURL(event.target.files[0]);
    } else {
      $('#fotosInvalido').addClass('d-block');
      $('#fotosInvalido').removeClass('d-none');
    }
  });
});
