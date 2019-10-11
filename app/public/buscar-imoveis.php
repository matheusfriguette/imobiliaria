<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="theme-color" content="#38b2ac" />

    <!-- Stylesheets -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script src="https://kit.fontawesome.com/b7323e4599.js"></script>
    <link rel="stylesheet" href="../../assets/css/custom.css" />

    <title>Imobiliária</title>
  </head>

  <body>
    <?php include "../core/layout/header.php"; ?>

    <section>
      <div class="container py-5">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <div class="text-uppercase font-size-14 font-weight-semibold">Pesquisar imóveis</div>
            <form class="mt-4" name="buscaImoveis">
              <div class="form-group">
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
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>Bairro</label>
                    <select class="form-control" name="bairro">
                      <option value="id1">Bairro 1</option>
                      <option value="id2">Bairro 2</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Valor minímo</label>
                    <input class="form-control" name="valorMinimo" type="number" />
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Valor máximo</label>
                    <input class="form-control" name="valorMaximo" type="number" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Palavras-chave</label>
                <input class="form-control" name="palavrasChave" type="text" />
              </div>
              <div class="d-flex justify-content-end">
                <button class="btn btn-primary">
                  Buscar imóveis
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="d-flex flex-column mt-5">
          <h3>Resultados da busca</h3>
          <div class="row">
            <div class="col-lg-4 py-2">
              <div class="card shadow-sm border-0 h-100">
                <div class="card-body d-flex flex-column">
                  <div class="border-bottom pb-3">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <span class="badge badge-primary badge-pill">Apartamento</span>
                      <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#imovelModal">
                        <i class="fas fa-eye"></i>
                      </button>
                    </div>
                    <div class="font-size-24 mt-2">R$ 160000</div>
                    <div class="text-muted">Avenida João Naves • 244m²</div>
                  </div>
                  <div class="d-flex mt-3 flex-grow-1">
                    <div class="d-flex align-items-baseline">
                      <i class="fas fa-bed text-primary"></i>
                      <span class="ml-2">3 quartos</span>
                    </div>
                    <div class="d-flex align-items-baseline ml-4">
                      <i class="fas fa-bath text-primary"></i>
                      <span class="ml-2">2 suítes</span>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-block mt-5" data-toggle="modal" data-target="#interesseModal">Tenho interesse</button>
                </div>
              </div>
            </div>
            <div class="col-lg-8 py-2">
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <div class="text-uppercase font-weight-semibold font-size-14">Galeria de fotos</div>
                  <div class="row mt-4">
                    <div class="col-md-4 py-2">
                      <img class="gallery-image" src="../../assets/img/home-1.jpg" />
                    </div>
                    <div class="col-md-4 py-2">
                      <img class="gallery-image" src="../../assets/img/home-2.jpg" />
                    </div>
                    <div class="col-md-4 py-2">
                      <img class="gallery-image" src="../../assets/img/home-3.jpg" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php include "../core/layout/footer.php"; ?>

    <div class="modal fade" id="imovelModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form class="needs-validation" name="login" novalidate>
            <div class="modal-header">
              <h5 class="modal-title">Detalhes do imóvel</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body px-4">
              <div class="d-flex justify-content-between align-items-baseline flex-wrap">
                <div>
                  <div class="font-size-24">Apartamento para alugar</div>
                  <div class="d-flex align-items-baseline">
                    <i class="fas fa-map-marker-alt text-primary"></i>
                    <span class="ml-2">Rua Cachoeira Dourada, 25 - Bairro Gravatás</span>
                  </div>
                </div>
                <div>
                  <div class="text-primary text-md-right font-weight-semibold font-size-24">R$ 933,00</div>
                  <div class="text-muted text-md-right font-weight-semibold font-size-14">+ condomínio de R$ 933,00</div>
                </div>
              </div>
              <div class="text-uppercase font-weight-semibold font-size-14 mt-4">Detalhes</div>
              <div class="row mt-1">
                <div class="col-md-4">
                  <i class="fas fa-sign text-muted"></i>
                  <span class="ml-2">144m²</span>
                </div>
                <div class="col-md-4">
                  <i class="fas fa-couch text-muted"></i>
                  <span class="ml-2">1 sala de estar</span>
                </div>
                <div class="col-md-4">
                  <i class="fas fa-utensils text-muted"></i>
                  <span class="ml-2">1 sala de jantar</span>
                </div>
                <div class="col-md-4">
                  <i class="fas fa-bed text-muted"></i>
                  <span class="ml-2">2 quartos</span>
                </div>
                <div class="col-md-4">
                  <i class="fas fa-bath text-muted"></i>
                  <span class="ml-2">1 suíte</span>
                </div>
                <div class="col-md-4">
                  <i class="fas fa-car text-muted"></i>
                  <span class="ml-2">2 vagas na garagem</span>
                </div>
                <div class="col-md-4">
                  <i class="fas fa-level-up-alt text-muted"></i>
                  <span class="ml-2">3º andar</span>
                </div>
                <div class="col-md-4">
                  <i class="fas fa-shield-alt text-muted"></i>
                  <span class="ml-2">Possui portaria 24 hrs</span>
                </div>
                <div class="col-md-4">
                  <i class="fas fa-tshirt text-muted"></i>
                  <span class="ml-2">Possui armário embutido</span>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                  <div class="d-flex align-items-baseline"></div>
                </div>
              </div>
              <div class="text-uppercase font-weight-semibold font-size-14 mt-4">Descrição</div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet nibh eget tellus feugiat placerat imperdiet ut sapien. Etiam bibendum ipsum et justo consequat, nec
                imperdiet nunc pellentesque. Sed hendrerit lacus vel est sodales, ut consequat nunc suscipit. Vivamus tincidunt felis id laoreet eleifend. Vestibulum gravida malesuada
                lobortis.
                <br />
                <br />
                Construído em 10/02/2001
              </p>
              <div class="text-uppercase font-weight-semibold font-size-14 mt-4">Fotos do imóvel</div>
              <div class="row">
                <div class="col-md-4 py-2">
                  <img class="gallery-image" src="../../assets/img/home-1.jpg" />
                </div>
                <div class="col-md-4 py-2">
                  <img class="gallery-image" src="../../assets/img/home-2.jpg" />
                </div>
                <div class="col-md-4 py-2">
                  <img class="gallery-image" src="../../assets/img/home-3.jpg" />
                </div>
              </div>
            </div>
            <div class="modal-footer bg-light border-0">
              <button class="btn btn-primary" data-dismiss="modal" data-toggle="modal"  data-target="#interesseModal">Tenho interesse</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="interesseModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form class="needs-validation" name="interesse" novalidate>
            <div class="modal-header">
              <h5 class="modal-title">Entrar em contato</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Nome</label>
                <input class="form-control" name="nome" type="text" required />
                <div class="invalid-feedback">
                  Esse campo é obrigatório.
                </div>
              </div>
              <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" name="email" type="email" required />
                <div class="invalid-feedback">
                  Digite um e-mail válido.
                </div>
              </div>
              <div class="form-group">
                <label>Telefone</label>
                <input class="form-control" name="telefone" type="text" required />
                <div class="invalid-feedback">
                  Esse campo é obrigatório.
                </div>
              </div>
              <div class="form-group">
                <label>Proposta</label>
                <textarea class="form-control" name="proposta" required></textarea>
                <div class="invalid-feedback">
                  Esse campo é obrigatório.
                </div>
              </div>
            </div>
            <div class="modal-footer bg-light border-0">
              <button class="btn btn-outline-primary" type="button" data-dismiss="modal">Cancelar</button>
              <button class="btn btn-primary">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="../../assets/js/main.js"></script>
  </body>
</html>
