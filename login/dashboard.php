<?php
include('../includes/config.php');
?>
<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/dashboard.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <title>MP - Bienvenidad</title>
</head>

<body>

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
        <a href="index.php" class="d-block text-light p-3"><i class="icon ion-ios-log-out mr-2 lead"></i>
          Cerrar Sesión</a>
      </div>
    </div>

    <!-- Administrar Afiliaciones -->
    <div class="content  bienvenidad w-100">
      <img src="<?php echo BASE_URL ?>img/home.jpg" alt="background">
    </div> <!-- End Administrar Afiliaciones -->

  </div><!-- End Menu Lateral -->

</body>

<!-- Scripts Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<!-- Scripts Bootstrap End -->

</html>