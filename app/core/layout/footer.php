<footer class="bg-white">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-8">
        <h4>Imobilé</h4>
        <p>Somos uma empresa de Imobiliária atuando há mais de 8 anos no mercado, sempre buscando a satisfação e
          aprovação de nossos clientes.</p>
      </div>
      <div class="col-md-4">
        <h4>Contato</h4>
        <ul class="list-unstyled">
          <li class="py-1">
            <i class="fas fa-map-marker-alt text-muted"></i>
            <span class="ml-2 text-dark">Avenida João Naves, 653</span>
          </li>
          <li class="py-1">
            <i class="fas fa-envelope text-muted"></i>
            <a class="ml-2 text-dark" href="mailto:contato@imobile.com">contato@imobile.com</a>
          </li>
          <li class="py-1">
            <i class="fas fa-phone text-muted"></i>
            <a class="ml-2 text-dark" href="tel:3432232394">34 3223-2394</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="border-top pt-3">
      © 2019, Imobilé. Todos os direitos reservados.
    </div>
  </div>
</footer>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="needs-validation" name="login" novalidate>
        <div class="modal-header">
          <h5 class="modal-title">Digite seu dados de login</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Usuário</label>
            <input class="form-control" name="user" type="text" required />
            <div class="invalid-feedback">
              Digite o nome do usuário.
            </div>
          </div>
          <div class="form-group">
            <label>Senha</label>
            <input class="form-control" name="password" type="password" required />
            <div class="invalid-feedback">
              Digite a senha.
            </div>
          </div>
        </div>
        <div class="modal-footer bg-light border-0">
          <a href="../private/listar-funcionarios.html" class="btn btn-primary">Login</a>
        </div>
      </form>
    </div>
  </div>
</div>
