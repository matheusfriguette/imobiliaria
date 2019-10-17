<div class="page-sidebar position-fixed">
  <nav class="d-flex flex-column h-100 py-5">
    <ul class="nav flex-column flex-grow-1 mx-0">
      <li class="nav-item">
        <a class="nav-link <?php echo ($currentPage === 'listar-funcionarios' || $currentPage === 'cadastrar-funcionario') ? 'active' : ''; ?> mx-2 px-1 py-0 my-1" href="#funcionarios" data-toggle="collapse">
          <div class="d-flex align-items-baseline font-weight-medium">
            <div class="iconbox iconbox-sm">
              <i class="fas fa-users font-size-18"></i>
            </div>
            <span class="ml-3 text-dark">Funcionários</span>
          </div>
        </a>
        <ul class="collapse show list-unstyled ml-5" id="funcionarios">
          <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage === 'listar-funcionarios') ? 'active' : ''; ?> mx-1 px-1 py-1" href="listar-funcionarios.php">Listar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage === 'cadastrar-funcionario') ? 'active' : ''; ?> mx-1 px-1 py-1" href="cadastrar-funcionario.php">Cadastrar</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($currentPage === 'listar-clientes' || $currentPage === 'cadastrar-cliente') ? 'active' : ''; ?> mx-2 my-1 px-1 py-0" href="#clientes" data-toggle="collapse">
          <div class="d-flex align-items-baseline font-weight-medium">
            <div class="iconbox iconbox-sm">
              <i class="fas fa-user font-size-18"></i>
            </div>
            <span class="ml-3 text-dark">Clientes</span>
          </div>
        </a>
        <ul class="collapse show list-unstyled ml-5" id="clientes">
          <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage === 'listar-clientes') ? 'active' : ''; ?> mx-1 px-1 py-1" href="listar-clientes.php">Listar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage === 'cadastrar-cliente') ? 'active' : ''; ?> mx-1 px-1 py-1" href="cadastrar-cliente.php">Cadastrar</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($currentPage === 'listar-imoveis' || $currentPage === 'cadastrar-imovel') ? 'active' : ''; ?> mx-2 my-1 px-1 py-0" href="#imoveis" data-toggle="collapse">
          <div class="d-flex align-items-baseline font-weight-medium">
            <div class="iconbox iconbox-sm">
              <i class="fas fa-building font-size-18"></i>
            </div>
            <span class="ml-3 text-dark">Imóveis</span>
          </div>
        </a>
        <ul class="collapse show list-unstyled ml-5" id="imoveis">
          <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage === 'listar-imoveis') ? 'active' : ''; ?> mx-1 px-1 py-1" href="listar-imoveis.php">Listar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($currentPage === 'cadastrar-imovel') ? 'active' : ''; ?> mx-1 px-1 py-1" href="cadastrar-imovel.php">Cadastrar</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo ($currentPage === 'listar-interesses') ? 'active' : ''; ?> mx-2 my-1 px-1 py-0" href="listar-interesses.php">
          <div class="d-flex align-items-baseline font-weight-medium">
            <div class="iconbox iconbox-sm">
              <i class="fas fa-envelope-open-text font-size-18"></i>
            </div>
            <span class="ml-3 text-dark">Interesses</span>
          </div>
        </a>
      </li>
    </ul>
    <a class="nav-link mx-2 my-1 px-1 py-0" href="../public/home.php">
      <div class="d-flex align-items-baseline font-weight-medium">
        <div class="iconbox iconbox-sm">
          <i class="fas fa-sign-out-alt font-size-18"></i>
        </div>
        <span class="ml-3 text-dark">Sair</span>
      </div>
    </a>
  </nav>
</div>
<div class="page-sidebar-shadow"></div>