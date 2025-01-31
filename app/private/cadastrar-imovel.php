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
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-sm">
        <button class="d-lg-none btn btn-primary sidebar-toggle" type="button">
          <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand font-weight-semibold" href="#">Imobilé</a>
      </nav>
    </header>
    <div class="d-flex mt-4">
      <?php $currentPage = 'cadastrar-imovel'; ?>
      <?php include "../core/layout/sidebar.php"; ?>
      <div class="page-content">
        <form class="needs-validation" name="imovel" novalidate>
          <div class="container py-5 mb-5 px-md-5">
            <a class="text-decoration-none text-muted" href="listar-imoveis.html">
              <i class="fas fa-angle-left"></i>
              <span class="ml-2">Voltar para listagem</span>
            </a>
            <h4 class="mt-2">Cadastrar novo imóvel</h4>
            <div class="card shadow-sm border-0 overflow-hidden mt-5">
              <div class="card-body">
                <div class="text-uppercase font-size-14 font-weight-medium">Informações básicas</div>
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Categoria</label>
                      <div class="d-flex">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" id="categoriaCasa" name="categoria" type="radio" value="casa" checked />
                          <label class="custom-control-label" for="categoriaCasa">Casa</label>
                        </div>
                        <div class="custom-control custom-radio ml-4">
                          <input class="custom-control-input" id="categoriaApartamento" name="categoria" type="radio" value="apartamento" />
                          <label class="custom-control-label" for="categoriaApartamento">Apartamento</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Disponível para</label>
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
                  </div>
                </div>
                <div class="form-group">
                  <label>Proprietário</label>
                  <select class="form-control" name="owner" required>
                    <option value="">Selecione...</option>
                    <option value="id1">Proprietário1</option>
                    <option value="id2">Proprietário2</option>
                  </select>
                  <div class="invalid-feedback">
                    Esse campo é obrigatório.
                  </div>
                </div>
                <div id="valorImovel" class="form-group">
                  <label>Valor do imóvel</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">R$</span>
                    </div>
                    <input class="form-control" name="valorVenda" type="number" min="0" step=".01" required />
                    <div class="invalid-feedback">
                      Esse campo é obrigatório.
                    </div>
                  </div>
                </div>
                <div id="valorAluguel" class="form-group d-none">
                  <label>Valor do aluguel</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">R$</span>
                    </div>
                    <input class="form-control" name="valorAluguel" type="number" min="0" step=".01" required />
                    <div class="invalid-feedback">
                      Esse campo é obrigatório.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow-sm border-0 overflow-hidden mt-5">
              <div class="card-body">
                <div class="text-uppercase font-size-14 font-weight-medium">Detalhes técnicos do imóvel</div>
                <div class="row mt-4">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Salas de estar</label>
                      <input class="form-control" name="salasEstar" type="number" min="0" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Salas de jantar</label>
                      <input class="form-control" name="salasJantar" type="number" min="0" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Quartos</label>
                      <input class="form-control" name="quartos" type="number" min="0" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Suítes</label>
                      <input class="form-control" name="suites" type="number" min="0" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Aréa em m²</label>
                      <input class="form-control" name="area" type="number" min="0" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Vagas na garagem</label>
                      <input class="form-control" name="vagasGaragem" type="number" min="0" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Armário embutido?</label>
                      <div class="custom-control custom-checkbox ">
                        <input class="custom-control-input" id="armarioEmbutido" name="armarioEmbutido" type="checkbox" />
                        <label class="custom-control-label" for="armarioEmbutido"></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Data de construção</label>
                  <input class="form-control" name="dataConstrucao" type="date" required />
                  <div class="invalid-feedback">
                    Esse campo é obrigatório.
                  </div>
                </div>
                <div class="form-group">
                  <label>Descrição</label>
                  <textarea class="form-control" name="descricao" required></textarea>
                  <div class="invalid-feedback">
                    Esse campo é obrigatório.
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow-sm border-0 overflow-hidden mt-5 d-none" id="cardApartamento">
              <div class="card-body">
                <div class="text-uppercase font-size-14 font-weight-medium">Informações específicas do apartamento</div>
                <div class="row mt-4">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Andar</label>
                      <input class="form-control" name="floor" type="number" min="0" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Valor do condominío</label>
                      <input class="form-control" name="value" type="number" min="0" step=".01" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Portaria 24hrs?</label>
                      <div class="custom-control custom-checkbox ">
                        <input class="custom-control-input" id="portaria" name="portaria" type="checkbox" />
                        <label class="custom-control-label" for="portaria"></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow-sm border-0 overflow-hidden mt-5">
              <div class="card-body">
                <div class="text-uppercase font-size-14 font-weight-medium">Endereço</div>
                <small class="form-text text-muted">
                  Informe o CEP para que o restante do endereço seja preenchido automaticamente.
                </small>
                <div class="form-group mt-4">
                  <label>CEP</label>
                  <input class="form-control" name="cep" type="text" minlength="8" maxlength="8" regex="^[0-9]*$" required />
                  <small class="form-text text-muted">
                    Apenas números.
                  </small>
                  <div class="invalid-feedback">
                    Digite um CEP válido.
                  </div>
                  <div id="cepInvalido" class="invalid-feedback d-none">
                    Não foi possível encontrar um endereço com esse CEP.
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Estado</label>
                      <input class="form-control" name="estado" type="text" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Cidade</label>
                      <input class="form-control" name="cidade" type="text" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Bairro</label>
                      <input class="form-control" name="bairro" type="text" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    <div class="form-group">
                      <label>Rua</label>
                      <input class="form-control" name="rua" type="text" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Número</label>
                      <input class="form-control" name="numero" type="text" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow-sm border-0 overflow-hidden mt-5">
              <div class="card-body">
                <div class="text-uppercase font-size-14 font-weight-medium">Fotos do imóvel</div>
                <div class="form-group mt-4">
                  <div class="custom-file">
                    <input class="custom-file-input" id="fotoImovel" name="fotos" type="file" />
                    <label class="custom-file-label no-validation" for="fotoImovel">Escolher imagem</label>
                  </div>
                  <small class="form-text text-muted">
                    Limite de 6 fotos.
                  </small>
                  <div id="fotosInvalido" class="invalid-feedback d-none">
                    Limite de fotos atingido.
                  </div>
                  <input class="form-control d-none" name="numeroFotos" type="number" value="0" min="3" readonly />
                  <div class="invalid-feedback">
                    Você precisa enviar pelo menos 3 fotos do imóvel.
                  </div>
                </div>
                <div class="row mt-4" id="fotosImovel"></div>
              </div>
            </div>
          </div>
          <div class="action-bar fixed-bottom bg-white">
            <div class="container py-3 d-flex justify-content-end">
              <a class="btn btn-outline-primary" href="listar-imoveis.html">Cancelar</a>
              <button class="btn btn-primary ml-2">Salvar</button>
            </div>
          </div>
        </form>
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
