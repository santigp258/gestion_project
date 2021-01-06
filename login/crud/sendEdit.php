<?php include('../../includes/config.php'); 
 include('./crudClass.php'); 

$crudClass = new crudClass();
/* Signup Form */
if (!empty($_POST['editAfiSubmit'])) {
    $nombre =$_POST['nombreAfi']; 
    $cedula = $_POST['cedulaAfi']; 
    $telefono = $_POST['telAfi']; 
    $ciudad = $_POST['ciudadAfi']; 
    $email = $_POST['emailAfi']; 
    $f_afiliacion = $_POST['fechaAfi'];
    $id = $_GET['id'];
    /* Regular expression check */
    $nombre_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $nombre);
    if ($nombre_check) {
       $uid = $crudClass->updatedAffiliation($nombre, $cedula, $telefono, $ciudad, $email, $f_afiliacion, $id);
        echo 'updated';
    }else{
        echo 'error';
    }
}
?>

