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

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<div class="container-all">
  <div class="ctn-form">
    <img src="<?php echo BASE_URL ?>img/logo.png" alt="logo" class="logo">
    <h1 class="title">Registrate</h1>
    <form action="<?php echo BASE_URL ?>/login/sendData.php" method="POST" name="signup">
      <label for="nameReg" class="label">Nombre</label>
      <input type="text" name="nameReg" id="nameReg">
      <label for="usernameReg" class="label">Username</label>
      <input type="text" name="usernameReg" id="usernameReg">
      <label for="emailReg" class="label">Email</label>
      <input type="email" name="emailReg" id="emailReg">
      <label for="passwordReg" class="label">Contraseña</label>
      <input type="password" name="passwordReg" id="passwordReg" class="last-child">
      <input type="submit" value="Registrarse" name="signupSubmit">
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