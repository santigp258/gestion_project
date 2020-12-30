<?php
include('../includes/config.php');
if (!empty($_SESSION['uid'])) {
    $session_uid = $_SESSION['uid'];
    include('./userClass.php');
    $userClass = new userClass();
} else {
    if ($_SESSION['uid'] == null || $_SESSION['uid'] == '') {
        $url = BASE_URL . 'index.php';
    }
    $url = BASE_URL . 'index.php';
    header("Location: $url");
}
