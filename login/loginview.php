<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
</head>

<body>
    <form class="formulario" action="./sendData.php" method="POST">

        <h1>Login</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Username or Email" name="usernameEmail">

            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="password">

            </div>
            <input type="submit" value="Login" class="button" name="loginSubmit">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿No tienes una cuenta? <a class="link" href="registerview.html">Registrate </a></p>
        </div>
    </form>
</body>

</html>