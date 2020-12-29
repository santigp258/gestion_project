<?php
include("../includes/config.php");
include('./userClass.php');
$userClass = new userClass();

$errorMsgReg = '';
$errorMsgLogin = '';
/* Login Form */
if (!empty($_POST['loginSubmit'])) {
    $usernameEmail = $_POST['usernameEmail'];
    $password = $_POST['password'];
    if (strlen(trim($usernameEmail)) > 1 && strlen(trim($password)) > 1) {
        $uid = $userClass->userLogin($usernameEmail, $password);
        if ($uid) {
            $url = BASE_URL . 'login/home.php';
            header("Location: $url"); // Page redirecting to home.php 
        } else {
           echo $errorMsgLogin = "Please check login details.";
        }
    }
}

/* Signup Form */
if (!empty($_POST['signupSubmit'])) {
    $username = $_POST['usernameReg'];
    $email = $_POST['emailReg'];
    $password = $_POST['passwordReg'];
    /* Regular expression check */
    $username_check = preg_match('^[a-zA-ZÀ-ÿ\s]{1,40}$', $username);
    $email_check = preg_match('^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$', $email);
    $password_check = preg_match('^.{4,12}$', $password);

    if ($username_check && $email_check && $password_check) {
        $uid = $userClass->userRegistration($username, $password, $email);
        if ($uid) {
            $url = BASE_URL . 'login/home.php';
            header("Location: $url"); // Page redirecting to home.php 
        } else {
            $errorMsgReg = "Username or Email already exists.";
        }
    }
}
?>