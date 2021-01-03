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
  <title>MP - Detalles</title>
</head>

<body>
  <?php include_once('../includes/nav-menu.php') ?>

  <!-- Encabezado Editar Detalles -->
  <div class="content w-100">
    <section>
      <div class="container header">
        <div class="row">
          <div class="col-lg-9">
            <h1 class="title-admin mb-0">Detalles de Afiliación</h1>
            <p class="subtitle-admin lead text-muted">Vendedora MP</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Encabezado Editar Detalles -->

    <!-- Comienzo Formulario Detalles -->
    <section>
      <div class="container my-3 ">
        <div class="row">
          <div class="col-lg-12">
            <div class="card rouded-0 mt-4">
              <div class="container mt-3">
                <form>
                  <!-- Nombre y cedula -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputName4">Nombre</label>
                      <input type="text" class="form-control" id="inputName4" placeholder="Nombre" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCedula4">Cedula</label>
                      <input type="text" class="form-control" id="inputCedula4" placeholder="Cedula" disabled>
                    </div>
                  </div>
                  <!-- Telefono Ciudad -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputTelefono4">Telefono</label>
                      <input type="text" class="form-control" id="inputTelefono4" placeholder="Telefono" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputCiudad4">Ciudad</label>
                      <input type="text" class="form-control" id="inputCiudad4" placeholder="Ciudad" disabled>
                    </div>
                  </div>
                  <!-- Correo Afiliacion -->
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCorreo4">Correo</label>
                      <input type="email" class="form-control" id="inputCorreo4" placeholder="Correo" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputFecha4">Fecha de Afiliación</label>
                      <input type="date" class="form-control" id="inputFecha4" disabled>
                    </div>
                  </div>
                </form>
                <!-- Boton Regresar-->
                <a href="administrator.php"><button type="submit" class="btn btn-danger mb-3">Atras</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de Formulario Detalles -->
  </div>

</body>

</html>