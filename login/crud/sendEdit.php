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
    $nombre_check = preg_match('~^[A-Za-z0-9_ ]{3,60}$~i', $nombre);
    $cedula_check = preg_match('~^([0-9]){4,15}$~i', $cedula);
    $telefono_check = preg_match('~^([0-9]){8,15}$~i', $telefono);
    $ciudad_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $ciudad);
    $email_check = preg_match('~^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$~i', $email);
    if ($nombre_check && $cedula_check && $telefono_check && $ciudad_check && $email_check) {
       $uid = $crudClass->updatedAffiliation($nombre, $cedula, $telefono, $ciudad, $email, $f_afiliacion, $id);
        echo 'updated';
    }else{
        echo 'error';
    }
}
?>

