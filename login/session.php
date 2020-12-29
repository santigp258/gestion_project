<?php
include('../includes/config.php');
if (!empty($_SESSION['uid'])) {
    $session_uid = $_SESSION['uid'];
    include('./userClass.php');
    $userClass = new userClass();
}else{
    $url = BASE_URL . 'index.php';
    header("Location: $url");
}
