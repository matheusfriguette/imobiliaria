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
      <?php $currentPage = 'listar-funcionarios'; ?>
      <?php include "../core/layout/sidebar.php"; ?>
      <div class="page-content">
        <div class="container py-5 mb-5 px-md-5">
          <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
            <h4 class="mb-0">Funcionários cadastrados</h4>
            <a class="btn btn-primary mt-3" href="cadastrar-funcionario.html">
              <span>Cadastrar novo</span>
              <i class="fas fa-plus ml-2"></i>
            </a>
          </div>
          <div class="table-responsive mt-5">
            <table class="table border bg-white shadow-sm overflow-hidden">
              <thead class="bg-light">
                <tr class="text-uppercase text-muted font-size-14">
                  <th class="font-weight-medium" scope="col">Nome</th>
                  <th class="font-weight-medium" scope="col">CPF</th>
                  <th class="font-weight-medium" scope="col">Cargo</th>
                  <th class="font-weight-medium" scope="col">Data de ingresso</th>
                  <th class="font-weight-medium" scope="col">Telefones</th>
                  <th class="font-weight-medium" scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Giovana Sophia Porto</td>
                  <td>070.589.042-27</td>
                  <td>Chefe</td>
                  <td>24 de set de 2018</td>
                  <td>
                    <div class="d-flex align-items-baseline">
                      <i class="fas fa-phone text-muted"></i>
                      <span class="ml-2">(98) 2812-6567</span>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <i class="fas fa-mobile-alt text-muted"></i>
                      <span class="ml-2">(98) 99369-7648</span>
                    </div>
                  </td>
                  <td>
                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#funcionarioModal">
                      <i class="fas fa-eye"></i>
                      <span class="ml-2">Visualizar</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>Caio Otávio Barros</td>
                  <td>676.185.321-41</td>
                  <td>Vendedor</td>
                  <td>27 de set de 2018</td>
                  <td>
                    <div class="d-flex align-items-baseline">
                      <i class="fas fa-phone text-muted"></i>
                      <span class="ml-2">(98) 2812-6567</span>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <i class="fas fa-mobile-alt text-muted"></i>
                      <span class="ml-2">(98) 99369-7648</span>
                    </div>
                  </td>
                  <td>
                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#funcionarioModal">
                      <i class="fas fa-eye"></i>
                      <span class="ml-2">Visualizar</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>Thomas Ruan Porto</td>
                  <td>850.807.121-39</td>
                  <td>Coach</td>
                  <td>13 de jan de 2019</td>
                  <td>
                    <div class="d-flex align-items-baseline">
                      <i class="fas fa-phone text-muted"></i>
                      <span class="ml-2">(98) 2812-6567</span>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <i class="fas fa-mobile-alt text-muted"></i>
                      <span class="ml-2">(98) 99369-7648</span>
                    </div>
                  </td>
                  <td>
                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#funcionarioModal">
                      <i class="fas fa-eye"></i>
                      <span class="ml-2">Visualizar</span>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="funcionarioModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Visualizar funcionário</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body px-4 py-0">
            <div class="py-3">
              <div class="row">
                <div class="col-md-4">
                  <div class="font-weight-semibold mb-4">Informações básicas</div>
                </div>
                <div class="col-md-8">
                  <div>
                    <span class="font-weight-medium">Usuário: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Nome: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">CPF: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Telefone de contato: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Telefone celular: </span>
                    <span>Teste</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3 border-top">
              <div class="row">
                <div class="col-md-4">
                  <div class="font-weight-semibold mb-4">Endereço</div>
                </div>
                <div class="col-md-8">
                  <div>
                    <span class="font-weight-medium">CEP: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Estado: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Cidade: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Bairro: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Rua: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Número: </span>
                    <span>Teste</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3 border-top">
              <div class="row">
                <div class="col-md-4">
                  <div class="font-weight-semibold mb-4">Informações do funcionário</div>
                </div>
                <div class="col-md-8">
                  <div>
                    <span class="font-weight-medium">Cargo: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Salário base: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Comissão: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Data de ingresso: </span>
                    <span>Teste</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer border-0 bg-light">
            <button class="btn btn-primary" data-dismiss="modal">OK</button>
          </div>
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
