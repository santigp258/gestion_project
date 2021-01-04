<?php 

include('../includes/config.php');
include('./session.php');
include('./searchClass.php');

if(!empty($_POST['data'])){
  $search = new searchClass();
echo $search->searchMatches($_POST['data'], intVal($session_uid));
}
