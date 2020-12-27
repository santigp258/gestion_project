<?php
include('./includes/config.php')
?>
<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title>Login-MP</title>
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
<style>
  input:focus~label,
  input.used~label {
    left: -18px!important;
   
  }
</style>

<body>
  <!-- Add your site or application content here -->
  <div class="container-all">
    <div class="ctn-form">
      <img src="<?php echo BASE_URL ?>img/logo.png" alt="logo" class="logo">
      <h1 class="title">Iniciar Sesión</h1>
      <form action="<?php echo BASE_URL ?>login/sendData.php" method="POST" name="login">
        <div class="group">
          <input type="text" name="usernameEmail" id="usernameEmail" autofocus><span class="highlight"></span><span class="bar"></span>
          <label>Email o Usuario</label>
        </div>
        <div class="group">
          <input type="password" name="password" id="password" autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Contraseña</label>
        </div>
       <input type="submit" name="loginSubmit" value="Iniciar" class="btn">
      </form>

      <span class="text-footer">¿Aún no te has registrado?<a href="<?php echo BASE_URL ?>login/registerview.php"> Registrate</a></span>
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
  <script src="<?php echo BASE_URL ?>js/jquery.js"></script>
  <script src="<?php echo BASE_URL ?>js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="<?php echo BASE_URL ?>js/plugins.js"></script>
  <script src="<?php echo BASE_URL ?>js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function() {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'anonymizeIp', true);
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>