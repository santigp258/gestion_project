<?php
include('./includes/config.php');
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title>Login-Mp</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/estilos.css">
   <link rel="stylesheet" href="<?php echo BASE_URL ?>plugin/toastr/toastr.min.css">
   <script src="<?php echo BASE_URL ?>js/jquery.js"></script>
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!-- Add your site or application content here -->
  <div class="container-all">
    <div class="ctn-form">
      <img src="<?php echo BASE_URL ?>img/logo.png" alt="logo" class="logo">
      <h1 class="title">Iniciar Sesión</h1>

      <form action="<?php echo BASE_URL ?>login/sendData.php" method="POST" name="login">
        <!-- Email -->
        <label for="usernameEmail">Email o Usuario</label>
        <input type="text" name="usernameEmail" id="usernameEmail" autofocus>
        <!-- Password -->
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" autocomplete="off">
        <!-- Boton Iniciar -->
        <input type="submit" name="loginSubmit" value="Iniciar">
      </form>
      <!-- Text footer -->
      <span class="text-footer">¿Aún no te has registrado?<a
          href="<?php echo BASE_URL ?>login/registerview.php"> Registrate</a></span>
    </div>
    <!-- Lado Derecho -->
    <div class="ctn-text">
      <div class="capa"></div>
      <h1 class="title-description">Lorem ipsum dolor sit amet</h1>
      <p class="text-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati et culpa molestiae
        ea
        tenetur temporibus suscipit, labore, repellat provident delectus facere iusto quo dolorum esse, dignissimos
        aliquam blanditiis dolorem. Odio.</p>
    </div>
  </div>
  <script src="<?php echo BASE_URL ?>plugin/toastr/toastr.min.js"></script>
  <script src="<?php echo BASE_URL ?>plugin/toastr/validateLogin.js"></script>

</body>

</html>