<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="../css/estilos-registro.css" />
  <!-- <link rel="stylesheet" href="../css/fontawesome-all.min.css" /> -->
  <link rel="icon" href="img/logo.ico" />
</head>

<body>
  <div class="container-all">
    <div class="ctn-form">
      <img src="../img/logo.png" alt="logo" class="logo">
      <h1 class="title">Registrate</h1>
      <form action="./sendData.php" method="POST">
        <label for="">Nombre</label>
        <input type="text">
        <label for="">Email</label>
        <input type="email">
        <label for="">Contraseña</label>
        <input type="password">
        <input type="submit" value="Registrarse">
      </form>
      <span class="text-footer">¿Ya te has registrado?<a href="loginview.php">Iniciar Sesión</a></span>
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