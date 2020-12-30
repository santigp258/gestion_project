<?php
include('../includes/config.php');
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title>Register-MP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/registro.css">
   <link rel="stylesheet" href="<?php echo BASE_URL ?>plugin/toastr/toastr.min.css">
   <script src="<?php echo BASE_URL ?>js/jquery.js"></script>

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <div class="container-all">
    <div class="ctn-form">
      <img src="<?php echo BASE_URL ?>img/logo.png" alt="logo" class="logo">
      <h1 class="title">Registro</h1>
      <form action="<?php echo BASE_URL?>login/registerValidation.php" method="POST" name="signup">
        <!-- User -->
        <label for="usernameReg">Usuario</label>
        <input type="text" name="usernameReg" id="usernameReg" autocomplete="off" autofocus>
        <!-- Email -->
        <label for="emailReg">Email</label>
        <input type="text" name="emailReg" id="emailReg" autocomplete="off">
        <!-- Password -->
        <label for="passwordReg">Contraseña</label>
        <input type="password" name="passwordReg" id="passwordReg" autocomplete="off">
        <!-- Boton Registarse -->
        <input type="submit" name="signupSubmit" value="Registrar">
      </form>
      <!-- Text Footer -->
      <span class="text-footer">¿Ya te has registrado?<a href="<?php echo BASE_URL ?>index.php">
          Iniciar Sesión</a></span>
    </div>
    <!-- Lado Derecho -->
    <div class="ctn-text">
      <div class="capa"></div>
      <h1 class="title-description" id="par">Lorem ipsum dolor sit amet</h1>
      <p class="text-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati et culpa molestiae
        ea
        tenetur temporibus suscipit, labore, repellat provident delectus facere iusto quo dolorum esse, dignissimos
        aliquam blanditiis dolorem. Odio.</p>
    </div>
  </div>
  <script src="<?php echo BASE_URL ?>js/main.js"></script>
  <script src="<?php echo BASE_URL ?>plugin/toastr/validateRegister.js"></script>
  <script src="<?php echo BASE_URL ?>plugin/toastr/toastr.min.js"></script>
</body>

</html>