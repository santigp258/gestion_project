<?php include('../includes/config.php');
  include('./crud/crudClass.php');
if (isset($_GET['id'])) {
  $crudClass = new crudClass();
  $id = $_GET['id'];
  $information = $crudClass->showAfiByid($id);
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
  <title>MP - Editar Afiliación</title>
  <script src="<?php echo BASE_URL ?>js/jquery.js"></script>
</head>

<body>
  <?php include_once('../includes/nav-menu.php') ?>

  <!-- Encabezado Editar Afiliacion -->
  <div class="content w-100">
    <section>
      <div class="container header">
        <div class="row">
          <div class="col-lg-9">
            <h1 class="title-admin mb-0">Editar Afiliación</h1>
            <p class="subtitle-admin lead text-muted">Actualiza los Datos de esta Afiliación</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Encabezado Editar Afiliacion -->

    <!-- Comienzo Formulario Editar Afiliacion -->
    <section>
      <div class="container my-3 ">
        <div class="row">
          <div class="col-lg-12">
            <div class="card rouded-0 mt-4">
              <div class="container mt-3">
                  <?php foreach($information as $info){ ?>
                <form action="<?php echo BASE_URL?>login/crud/sendEdit.php?id=<?php echo $info->id?>" method="POST" id="formEdit">
                  <!-- Nombre y cedula -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputName4">Nombre</label>
                      <input type="text" class="form-control" id="inputName4" name="nombreAfi" value="<?php echo $info->nombre ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCedula4">Cedula</label>
                      <input type="text" class="form-control" id="inputCedula4" name="cedulaAfi" value="<?php echo $info->cedula ?>">
                    </div>
                  </div>
                  <!-- Telefono Ciudad -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputTelefono4">Telefono</label>
                      <input type="text" class="form-control" id="inputTelefono4" name="telAfi" value="<?php echo $info->telefono ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCiudad4">Ciudad</label>
                      <input type="text" class="form-control" id="inputCiudad4" name="ciudadAfi" value="<?php echo $info->ciudad ?>">
                    </div>
                  </div>
                  <!-- Correo Afiliacion -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCorreo4">Correo</label>
                      <input type="email" class="form-control" id="inputCorreo4" name="emailAfi" value="<?php echo $info->email ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputFecha4">Fecha de Afiliación</label>
                      <input type="date" class="form-control" id="inputFecha4" name="fechaAfi"  value="<?php echo $info->f_afiliacion ?>">
                    </div>
                  </div>
                  <?php } ?>
                <!-- Botones Guardar y Cancelar -->
                <button type="submit" class="btn btn-primary mb-3" name="edit" id="submitEdit">Actualizar</button>
                <a href="administrator.php"><button type="button" class="btn btn-danger mb-3">Cancelar</button></a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de Formulario Editar Afiliacion -->
  </div>

</body>
<?php include_once('../includes/footer.php') ?>
<script src="<?php echo BASE_URL ?>plugin/validationsViews/validateSendEdit.js"></script>
<script src="<?php echo BASE_URL ?>plugin/toastr/toastr.min.js"></script>
</html>