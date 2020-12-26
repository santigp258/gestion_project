<?php
include('./includes/config.php');
$session_uid='';
$_SESSION['uid']=''; 
if(empty($session_uid) && empty($_SESSION['uid']))
{
$url='../index.html';
header("Location: $url");
//echo "";
}