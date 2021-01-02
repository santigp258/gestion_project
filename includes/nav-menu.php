
  <!-- Barra de Navegacion -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand font-weight-bold" href="#">MP DASHBOARD</a>
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <img class="img-fluid float-right perfil ml-2" src="<?php echo BASE_URL ?>img/perfil.jpg"
            alt="foto de perfil">
          <li class="nav-item">
            <a class="nav-link" href="#">Administrador</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Barra de Navegacion -->

  <!-- Menu Lateral -->
  <div class="d-flex">
    <div id="sidebar-container" class="bg-dark">
      <div class="title-menu">
        <h4 class="p-2 mt-3">Sistema de Control</h4>
        <h4>de Afiliaciónes MP</h4>
      </div>
      <div class="menu mt-5">
        <a href="dashboard.php" class="d-block text-light p-3"><i class="icon ion-ios-home mr-2 lead"></i>
          Inicio</a>
        <a href="administrator.php" class="d-block text-light p-3"><i class="icon ion-ios-people mr-2 lead"></i>
          Administrar Afiliaciones</a>
        <a href="<?php echo BASE_URL ?>login/logout.php" class="d-block text-light p-3"><i class="icon ion-ios-log-out mr-2 lead"></i>
          Cerrar Sesión</a>
      </div>
    </div>
