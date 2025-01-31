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
      <?php $currentPage = 'listar-interesses'; ?>
      <?php include "../core/layout/sidebar.php"; ?>
      <div class="page-content">
        <div class="container py-5 mb-5 px-md-5">
          <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
            <h4 class="mb-0">Interesses dos usuários nos imóveis</h4>
          </div>
          <div class="table-responsive mt-5">
            <table class="table border bg-white shadow-sm overflow-hidden">
              <thead class="bg-light">
                <tr class="text-uppercase text-muted font-size-14">
                  <th class="font-weight-medium" scope="col">Nome</th>
                  <th class="font-weight-medium" scope="col">E-mail</th>
                  <th class="font-weight-medium" scope="col">Telefone</th>
                  <th class="font-weight-medium" scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Alexandre José</td>
                  <td>alexandrejose@gmail.com.br</td>
                  <td>(98) 99929-7656</td>
                  <td>
                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#interesseModal">
                      <i class="fas fa-eye"></i>
                      <span class="ml-2">Detalhes</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>Franco Mares</td>
                  <td>francomares@hotmail.com.br</td>
                  <td>(98) 99816-6298</td>
                  <td>
                    <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#interesseModal">
                      <i class="fas fa-eye"></i>
                      <span class="ml-2">Detalhes</span>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="interesseModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Visualizar proposta</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body px-4 py-0">
            <div class="py-3">
              <div class="row">
                <div class="col-md-4">
                  <div class="font-weight-semibold mb-4">Informações do cliente</div>
                </div>
                <div class="col-md-8">
                  <div>
                    <span class="font-weight-medium">Nome: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">E-mail: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Telefone: </span>
                    <span>Teste</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3 border-top">
              <div class="row">
                <div class="col-md-4">
                  <div class="font-weight-semibold mb-4">Imóvel desejado</div>
                </div>
                <div class="col-md-8">
                  <div>
                    <span class="font-weight-medium">Proprietário: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Bairro: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Categoria: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Dísponivel para: </span>
                    <span>Teste</span>
                  </div>
                  <div>
                    <span class="font-weight-medium">Valor: </span>
                    <span>Teste</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-3 border-top">
              <div class="font-weight-semibold mb-2">Proposta</div>
              <p>
                Teste
              </p>
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
