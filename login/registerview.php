<?php
include('../includes/config.php');
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/main.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/estilos-registro.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/inputRegister.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <div class="container-all">
    <div class="ctn-form">
      <img src="<?php echo BASE_URL ?>img/logo.png" alt="logo" class="logo">
      <h1 class="title">Registro</h1>
      <form action="<?php echo BASE_URL ?>/login/sendData.php" method="POST" name="signup">
        <div class="group">
          <input type="text" autocomplete="off" name="nameReg" id="nameReg" autofocus><span class="highlight"></span><span class="bar"></span>
          <label>Nombre</label>
        </div>
        <div class="group">
          <input type="text" name="usernameReg" id="usernameReg" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Usuario</label>
        </div>
        <div class="group">
          <input type="email" name="emailReg" id="emailReg" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Email</label>
        </div>
        <div class="group">
          <input type="text" name="passwordReg" id="passwordReg" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Contraseña</label>
        </div>
        <button type="submit" class="text-footer text-footer-registration" name="signupSubmit">Subscribe

        </button>
      </form>
      <span class="text-footer text-footer-registration">¿Ya te has registrado?<a href="<?php echo BASE_URL ?>index.php"> Iniciar Sesión</a></span>
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
</body>

</html>