<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="theme-color" content="#38b2ac" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/b7323e4599.js"></script>
  <link rel="stylesheet" href="../../assets/css/custom.css" />

  <title>Imobiliária</title>
</head>

<body>
  <?php include "../core/layout/header.php"; ?>

  <section>
    <div class="position-relative bg-primary main-cover">
      <div class="position-absolute w-100 h-100">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-7 d-flex flex-column justify-content-center">
              <h1 class="text-white text-center mt-4 mt-md-0">
                Compre ou alugue o imóvel dos seus sonhos
              </h1>
            </div>
            <div class="col-md-5 d-flex flex-column justify-content-center">
              <div class="card shadow border-0">
                <div class="card-body">
                  <form name="buscaImoveisHome">
                    <div class="form-group">
                      <label>O que deseja?</label>
                      <div class="d-flex">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" id="tipoCompra" name="tipo" type="radio" checked />
                          <label class="custom-control-label" for="tipoCompra">Comprar</label>
                        </div>
                        <div class="custom-control custom-radio ml-4">
                          <input class="custom-control-input" id="tipoAluguel" name="tipo" type="radio" />
                          <label class="custom-control-label" for="tipoAluguel">Alugar</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Bairro</label>
                      <select class="form-control" name="bairro">
                        <option value="id1">Bairro 1</option>
                        <option value="id2">Bairro 2</option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Valor minímo</label>
                          <input class="form-control" name="valorMinimo" type="number" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Valor máximo</label>
                          <input class="form-control" name="valorMaximo" type="number" />
                        </div>
                      </div>
                    </div>
                    <a href="buscar-imoveis.html" class="btn btn-primary btn-block">
                      Buscar imóveis
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img src="../../assets/img/home-cover.jpg" alt="" />
    </div>
  </section>
  <section class="py-5">
    <div class="container py-5">
      <h3 class="text-center">Valores</h3>
      <div class="row mt-5">
        <div class="col-md-4 d-flex flex-column align-items-center">
          <div class="iconbox bg-primary text-white">
            <i class="far fa-handshake fa-2x"></i>
          </div>
          <div class="text-center mt-4">
            <h6>Confiança</h6>
            <p>Compromisso total com nossos clientes, com foco na qualidade e satisfação do cliente.</p>
          </div>
        </div>
        <div class="col-md-4 d-flex flex-column align-items-center">
          <div class="iconbox bg-primary text-white">
            <i class="far fa-thumbs-up fa-2x"></i>
          </div>
          <div class="text-center mt-4">
            <h6>Honestidade</h6>
            <p>Nossa principal foco é oferecer nossos serviços com honestidade e transparência.</p>
          </div>
        </div>
        <div class="col-md-4 d-flex flex-column align-items-center">
          <div class="iconbox bg-primary text-white">
            <i class="far fa-lightbulb fa-2x"></i>
          </div>
          <div class="text-center mt-4">
            <h6>Qualidade</h6>
            <p>Nossos imóveis são duradouros e minimamente planejados, trazendo conforto e segurança.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white py-5">
    <div class="container py-5">
      <h3 class="mt-5 pt-5 mt-md-0 pt-md-0 text-center">Sobre a Imobilé</h3>
      <div class="row mt-5">
        <div class="col-8 mx-auto">
          <p class="text-justify font-size-18">Apostando sempre na inovação e na evolução de seu negócio, a Imobilé
            está a 10 anos atuando no mercado de venda e aluguel de imóveis. Entre as empresas imobiliárias, foi
            pioneira no oferecimento de uma plataforna on-line, disponibilizando um serviço confiável e de qualidade.
            Hoje, conta com diversos parceiros estabelecidos no mercado, uma grande equipe e uma estrutura moderna,
            garantindo a satisfação e a segurança de nossos clientes na prestação de nossos serviços.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container py-5">
      <h3 class="mt-5 pt-5 mt-md-0 pt-md-0 text-center">Nossos parceiros</h3>
      <div class="row mt-5">
        <div class="col-12">
          <div class="row">
            <div class="col-6 col-md-3 py-1 px-1">
              <img class="partner-image" src="../../assets/img/partner-1.jpg" alt="Parceiro 1">
            </div>
            <div class="col-6 col-md-3 py-1 px-1">
              <img class="partner-image" src="../../assets/img/partner-2.jpg" alt="Parceiro 2">
            </div>
            <div class="col-6 col-md-3 py-1 px-1">
              <img class="partner-image" src="../../assets/img/partner-3.jpg" alt="Parceiro 3">
            </div>
            <div class="col-6 col-md-3 py-1 px-1">
              <img class="partner-image" src="../../assets/img/partner-4.jpg" alt="Parceiro 4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include "../core/layout/footer.php"; ?>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="../../assets/js/main.js"></script>
</body>

</html>