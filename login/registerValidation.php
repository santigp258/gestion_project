<?php 
include('../includes/config.php');
include('./userClass.php');
$userClass = new userClass();
/* Signup Form */
if (!empty($_POST['signupSubmit'])) {
  $username = $_POST['usernameReg'];
  $email = $_POST['emailReg'];
  $password = $_POST['passwordReg'];
  /* Regular expression check */
  $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
  $email_check = preg_match('~^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$~i', $email);
  $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);
  if ($username_check && $email_check && $password_check) {
    $uid = $userClass->userRegistration($username, $password, $email);
    if ($uid) {
        echo 'send';
    } else {
        $base = BASE_URL;
        echo $errorMsgReg = 'error';
    }
}
}

?>