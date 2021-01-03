<?php include('../includes/config.php'); ?>
<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/CDN/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/dashboard.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <title>MP - Administrar Afiliaciones</title>
</head>

<body>
  <?php include_once('../includes/nav-menu.php') ?>
  <?php
function showInformation($uid)
{
    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM afiliaciones WHERE id_users=:uid");
        $stmt->bindParam("uid", $uid, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data
        return $data;
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

$information = showInformation($session_uid);
?>


  <!-- Administrar Afiliaciones -->
  <div class="content w-100">
    <section>
      <div class="container header">
        <div class="row">
          <div class="col-lg-9">
            <h1 class="title-admin mb-0">Administrar Afiliaciones</h1>
            <p class="subtitle-admin lead text-muted">Revisa la última información</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Comienzo de los Cruds -->
    <section>
      <div class="container my-3 ">
        <div class="row">
          <div class="col-lg-12">
            <div class="card rouded-0 mt-4">
              <!-- Buscar y agregar afiliacion -->
              <div class="container m-2">
                <nav class="navbar navbar-expand-lg navbar-light bg-light-white">
                  <form class="form-inline my-2 my-lg-0 lead">
                    <i class="icon ion-md-search" aria-hidden="true"></i>
                    <input class="form-control mr-sm-2 " type="search" placeholder="Buscar" aria-label="Search">
                  </form>
                  <!-- Search form -->
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <a class="icon ion-md-add lead" href="#"><span class="p-2">Crear
                          Afiliacion</span></a>
                    </ul>
                  </div>
                </nav>
              </div>
              <!-- Afiliacion y buscar -->

              <!-- Inicio de Tabla -->
              <div class="table-responsive">
                <table class=" table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Cédula</th>
                      <th scope="col">Teléfono</th>
                      <th scope="col">Ciudad</th>
                      <th scope="col">Correo</th>
                      <th scope="col">F. de Afiliación</th>
                      <th scope="col">Acción</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                  $count = 1;
                   foreach($information as $info){ ?>
                    <tr>
                      <th scope="row"><?php echo $count ?></th>
                      <td><?php echo $info->nombre ?></td>
                      <td><?php echo $info->cedula ?></td>
                      <td><?php echo $info->telefono ?></td>
                      <td><?php echo $info->ciudad ?></td>
                      <td><?php echo $info->email ?></td>
                      <td><?php echo $info->f_afiliacion ?></td>
                      <td>
                        <a href="#"><span class='icon ion-md-eye lead' style="color:var(--primary)"></span></a>
                        <a href="#"><span class='icon ion-md-create lead' style="color:var(--orange)"></span></a>
                        <a href="#"><span class='icon ion-md-trash lead' style="color:var(--red);"></span></a>
                      </td>
                    </tr>
                    <?php 
                  $count = $count + 1;
                }?>
                  </tbody>
                </table>
              </div>
              <!-- Pagination -->
              <div class="pagination p-0 m-auto">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Pagination end -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin de los Cruds -->

  </div> <!-- End Administrar Afiliaciones -->

  </div><!-- End Menu Lateral -->

</body>

<!-- Scripts Bootstrap -->
<script src="<?php echo BASE_URL ?>js/jquery.js">
</script>
<script src="<?php echo BASE_URL ?>js/CDN/popper.js">
</script>
<script src="<?php echo BASE_URL ?>js/CDN/bootstrap.js">
</script>
<!-- Scripts Bootstrap End -->

</html>