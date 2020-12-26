<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Login-MP</title>
  <meta name="viewport"
    content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/estilos.css">
  <!-- <link rel="stylesheet" href="../css/fontawesome-all.min.css"> -->
</head>

<body>
  <div class="container-all">
    <div class="ctn-form">
      <img src="../img/logo.png" alt="logo" class="logo">
      <h1 class="title">Iniciar Sesión</h1>
      <form action="./sendData.php" method="POST" name="login">
        <label for="usernameEmail">Email</label>
        <input type="text" id="usernameEmail" name="usernameEmail">
        <label for="password">Contraseña</label>
        <input type="password" name="password">
        <input type="submit" value="Iniciar" name="loginSubmit">
      </form>
      <span class="text-footer">¿Aún no te has registrado?<a href="registerview.php"> Registrate</a></span>
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