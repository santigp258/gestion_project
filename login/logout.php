<?php
include('../includes/config.php');
session_start();
session_destroy();
$url = BASE_URL . 'index.php';
header("Location: $url");
// /* $session_uid='';
// $_SESSION['uid']=''; 
// if(empty($session_uid) && empty($_SESSION['uid']))
// {

// //echo ""; 
// }/*