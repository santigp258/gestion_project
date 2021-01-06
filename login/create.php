<?php include('../includes/config.php'); ?>
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
  <title>MP - Crear Afiliación</title>
  <script src="<?php echo BASE_URL ?>js/jquery.js">
</script>
</head>

<body>
  <?php include_once('../includes/nav-menu.php') ?>

  <!-- Encabezado Crear Afiliacion -->
  <div class="content w-100">
    <section>
      <div class="container header">
        <div class="row">
          <div class="col-lg-9">
            <h1 class="title-admin mb-0">Crear Afiliación</h1>
            <p class="subtitle-admin lead text-muted">Agregando Nueva Vendedora MP</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Encabezado Crear Afiliacion -->

    <!-- Comienzo Formulario Crear -->
    <section>
      <div class="container my-3 ">
        <div class="row">
          <div class="col-lg-12">
            <div class="card rouded-0 mt-4">
              <div class="container mt-3">
                <form action="<?php echo BASE_URL ?>login/crud/sendCreate.php" method="POST" id="formCreate">
                  <!-- Nombre y cedula -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputName4">Nombre</label>
                      <input type="text" class="form-control" id="inputName4" placeholder="Nombre" name="nombreAfi" autofocus>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCedula4">Cedula</label>
                      <input type="text" class="form-control" id="inputCedula4" placeholder="Cedula" name="cedulaAfi">
                    </div>
                  </div>
                  <!-- Telefono Ciudad -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputTelefono4">Telefono</label>
                      <input type="text" class="form-control" id="inputTelefono4" placeholder="Telefono" name="telAfi">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCiudad4">Ciudad</label>
                      <input type="text" class="form-control" id="inputCiudad4" placeholder="Ciudad" name="ciudadAfi">
                    </div>
                  </div>
                  <!-- Correo Afiliacion -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCorreo4">Correo</label>
                      <input type="text" class="form-control" id="inputCorreo4" placeholder="Correo" name="emailAfi">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputFecha4">Fecha de Afiliación</label>
                      <input type="date" class="form-control" id="inputFecha4" name="fechaAfi" required>
                    </div>
                  </div>
                <button type="submit" id="submitCreate"class="btn btn-primary mb-3" name="createAfiSubmit" value="save" id="createAfiSubmit">Guardar</button>
                <a href="administrator.php"><button type="button" class="btn btn-danger mb-3">Cancelar</button></a>
                </form>
                <!-- Botones Guardar y Cancelar -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de Formulario Crear -->
  </div>

</body>
<?php  include_once('../includes/footer.php') ?>
<script src="<?php echo BASE_URL ?>plugin/validationsViews/validateSendCreate.js"></script>
<script src="<?php echo BASE_URL ?>plugin/toastr/toastr.min.js"></script>
</html>