<?php

session_start();
session_destroy();
$url = '../index.php';
header("Location: $url");
/* $session_uid='';
$_SESSION['uid']=''; 
if(empty($session_uid) && empty($_SESSION['uid']))
{

//echo ""; 
}/*