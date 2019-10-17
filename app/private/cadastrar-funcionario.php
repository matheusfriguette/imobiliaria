<!DOCTYPE html>
<html lang="pt-BR">
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
      <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top shadow-sm">
        <button class="d-lg-none btn btn-primary sidebar-toggle" type="button">
          <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand font-weight-semibold" href="#">Imobilé</a>
      </nav>
    </header>
    <div class="d-flex mt-4">
      <?php $currentPage = 'cadastrar-funcionario'; ?>
      <?php include "../core/layout/sidebar.php"; ?>
      <div class="page-content">
        <form class="needs-validation" name="funcionario" novalidate>
          <div class="container py-5 mb-5 px-md-5">
            <a class="text-decoration-none text-muted" href="listar-funcionarios.html">
              <i class="fas fa-angle-left"></i>
              <span class="ml-2">Voltar para listagem</span>
            </a>
            <h4 class="mt-2">Cadastrar novo funcionário</h4>
            <div class="card shadow-sm border-0 overflow-hidden mt-5">
              <div class="card-body">
                <div class="text-uppercase font-size-14 font-weight-medium">Informações básicas</div>
                <div class="row mt-4">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Usuário</label>
                      <input class="form-control" name="user" type="text" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Senha</label>
                      <input class="form-control" name="password" type="password" minlength="4" maxlength="25" required />
                      <div class="invalid-feedback">
                        A senha deve possuir no mínimo 4 caracteres.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <div class="form-group">
                      <label>Nome</label>
                      <input class="form-control" name="name" type="text" required />
                      <div class="invalid-feedback">
                        Esse campo é obrigatório.
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>CPF</label>
                      <input class="form-control" name="cpf" type="text" maxlength="11" minlength="11" regex="^[0-9]*$" required />
                      <small class="form-text text-muted">
                        Apenas números.
                      </small>
                      <div class="invalid-feedback">
                        Digite um CPF válido.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Telefone de contato</label>
                      <input class="form-control" name="telefoneContato" type="text" maxlength="10" minlength="10" regex="^[0-9]*$" required />
                      <small class="form-text text-muted">
                        Apenas números, com DDD incluso.
                      </small>
                      <div class="invalid-feedback">
                        Digite um número de telefone válido.
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Telefone celular</label>
                      <input class="form-control" name="telefoneCelular" type="text" maxlength="11" minlength="10" regex="^[0-9]*$" required />
                      <small class="form-text text-muted">
                        Apenas números, com DDD incluso.
                      </small>
                      <div class="invalid-feedback">
                        Digite um número de telefone válido.
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
                <div class="text-uppercase font-size-14 font-weight-medium">Informações do funcionário</div>
                <div class="form-group mt-4">
                  <label>Cargo</label>
                  <input class="form-control" name="cargo" type="text" required />
                  <div class="invalid-feedback">
                    Esse campo é obrigatório.
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Salário base</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">R$</span>
                        </div>
                        <input class="form-control" name="salario" type="number" min="0" step=".01" required />
                        <div class="invalid-feedback">
                          Esse campo é obrigatório.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Comissão</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">%</span>
                        </div>
                        <input class="form-control" name="comissao" type="number" min="0" required />
                        <div class="invalid-feedback">
                          Esse campo é obrigatório.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Data de ingresso</label>
                  <input class="form-control" name="dataIngresso" type="date" required />
                  <div class="invalid-feedback">
                    Esse campo é obrigatório.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="action-bar fixed-bottom bg-white">
            <div class="container py-3 d-flex justify-content-end">
              <button class="btn btn-outline-primary">Cancelar</button>
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
