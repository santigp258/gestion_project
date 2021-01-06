<?php include('../includes/config.php');
include('./crud/crudClass.php');
$uid = $_SESSION['uid'];
if (isset($uid)) {
  $crudClass = new crudClass();
  $information = $crudClass->showUserBySessionId($uid);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/CDN/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/dashboard.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>plugin/toastr/toastr.min.css">
  <script src="<?php echo BASE_URL ?>js/jquery.js"></script>
  <title>MP - Mi Perfil</title>
</head>

<body>
  <?php include_once('../includes/nav-menu.php') ?>

  <!-- Encabezado Editar Perfil -->
  <div class="content w-100">
    <section>
      <div class="container header">
        <div class="row">
          <div class="col-lg-9">
            <h1 class="title-admin mb-0">Mi Perfil</h1>
            <p class="subtitle-admin lead text-muted">Actualiza tu Informacion Personal</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Encabezado Editar Perfil -->

    <!-- Comienzo Formulario Perfil -->
    <section>
      <div class="container my-3 ">
        <div class="row">
          <div class="col-lg-12">
            <div class="card rouded-0 mt-4">
              <div class="container mt-3">
                <form action="<?php echo BASE_URL ?>login/crud/updateProfile.php" method="POST">
                  <!-- Nombre y cedula -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <?php foreach ($information as $info) { ?>
                        <label for="usernamePro">Usuario</label>
                        <input type="text" class="form-control" id="usernamePro" name="usernamePro" value="<?php echo $info->username ?>" disabled>
                    </div>
                  </div>
                  <!-- Telefono Ciudad -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="emailPro">Correo Electronico</label>
                      <input type="email" class="form-control" id="emailPro" name="emailPro" value="<?php echo $info->email ?>" disabled>
                    </div>
                  </div>
                  <!-- Correo Afiliacion -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="passwordPro">Contraseña</label>
                      <input type="password" class="form-control" id="passwordPro" name="passwordPro"> <i style="position: absolute; top: 36px; right: 12px; cursor:pointer" class="icon ion-ios-eye mr-2 lead show"></i><i style="position: absolute; top: 36px; right: 12px; cursor:pointer" class="icon ion-md-eye-off mr-2 lead hide"></i>
                    </div>
                  </div>
                <?php  } ?>
                <button type="submit" class="btn btn-primary mb-3" id="signupSubmit">Actualizar</button>
                <a href="administrator.php"><button type="button" class="btn btn-danger mb-3">Cancelar</button></a>
                </form>
                <!-- Botones Guardar y Cancelar -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de Formulario Perfil -->
  </div>
  <?php include_once('../includes/footer.php') ?>
  <script src="<?php echo BASE_URL ?>plugin/validationsViews/updatedProfile.js"></script>
  <script src="<?php echo BASE_URL ?>plugin/toastr/toastr.min.js"></script>
  <script src="<?php echo BASE_URL ?>js/eyes.js"></script>

</body>

</html>