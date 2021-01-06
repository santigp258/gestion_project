<?php 
include('../../includes/config.php');

/* Signup Form */
if (!empty($_POST['signupSubmit'])) {
    $username = $_POST['usernamePro'];
    $email = $_POST['emailPro'];
    $password = $_POST['passwordPro'];
    $uid = $_SESSION['uid'];
    /* Regular expression check */
    $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
    $email_check = preg_match('~^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$~i', $email);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);
    if ($username_check && $email_check && $password_check) {
        $uid = updatedUser($username, $password, $email, $uid);
        echo "send";
    }
}

function updatedUser($username, $password, $email, $uid) //uid/ dinamic index / total afilitions
{
  try {
    $db = getDB();
    $stmt = $db->prepare("UPDATE `users` SET `username`=:username,`password`=:hash_password ,`email`=:email ,`updated_At`= CURRENT_TIMESTAMP WHERE `uid`=:uid");
    $stmt->bindParam("username", $username, PDO::PARAM_STR);
    $hash_password = hash('sha256', $password); //Password encryption
    $stmt->bindParam("hash_password", $hash_password, PDO::PARAM_STR);
    $stmt->bindParam("email", $email, PDO::PARAM_STR);
    $stmt->bindParam("uid", $uid, PDO::PARAM_INT);
    $stmt->execute();
    $db = null;
  } catch (PDOException $e) {
    echo '{"error":{"text":' . $e->getMessage() . '}}';
  }
}



?>