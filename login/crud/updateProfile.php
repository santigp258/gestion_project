<?php 
include('../../includes/config.php');
include('./crudClass.php');
/* Signup Form */
if (!empty($_POST['signupSubmit'])) {
    $crudClass = new crudClass();
    $username = $_POST['usernamePro'];
    $email = $_POST['emailPro'];
    $password = $_POST['passwordPro'];
    $uid = $_SESSION['uid'];
    /* Regular expression check */
    $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
    $email_check = preg_match('~^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$~i', $email);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);
    if ($username_check && $email_check && $password_check) {
        $uid = $crudClass->updatedUserProfile($username, $password, $email, $uid);
        echo "send";
    }
}

?>