<?php include('../includes/config.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $information = showByid($id);
}

function showByid($id) //uid/ dinamic index / total afilitions
{
  try {
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM afiliaciones WHERE id=:id");
    $stmt->bindParam("id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data
    $db = null;
    return $data;
  } catch (PDOException $e) {
    echo '{"error":{"text":' . $e->getMessage() . '}}';
  }
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
            <p class="subtitle-admin lead text-muted">Visualiza los Datos de esta
              Afiliación</p>
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

                <!-- Nombre y cedula -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <?php foreach($information as $info){ ?>
                    <label for="inputName4">Nombre</label>
                    <input type="text" class="form-control" id="inputName4" placeholder="Nombre"
                      value="<?php echo  $info->nombre ?>" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputCedula4">Cedula</label>
                    <input type="text" class="form-control" id="inputCedula4" placeholder="Cedula"
                      value="<?php echo $info->cedula ?>" disabled>
                  </div>
                </div>
                <!-- Telefono Ciudad -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputTelefono4">Telefono</label>
                    <input type="text" class="form-control" id="inputTelefono4" placeholder="Telefono"
                      value="<?php echo $info->telefono ?>" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputCiudad4">Ciudad</label>
                    <input type="text" class="form-control" id="inputCiudad4" placeholder="Ciudad"
                      value="<?php echo  $info->ciudad?>" disabled>
                  </div>
                </div>
                <!-- Correo Afiliacion -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCorreo4">Correo</label>
                    <input type="email" class="form-control" id="inputCorreo4" placeholder="Correo"
                      value="<?php echo $info->email ?>" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputFecha4">Fecha de Afiliación</label>
                    <input type="date" class="form-control" id="inputFecha4" value="<?php echo  $info->f_afiliacion ?>"
                      disabled>
                  </div>
                </div>
                <?php } ?>
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
  <?php include_once('../includes/footer.php') ?>
</body>

</html>