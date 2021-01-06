<?php 

include('../includes/config.php');
include('./session.php');
include('./searchClass.php');

if(isset($_POST['dataShow'])){
  $pagination = 4;
  $index = $_POST['index']; 
  $id = $_POST['id']; 
  $uid = $session_uid;
  $base = BASE_URL;
  $show = new searchClass();
 echo $show->showInformation($uid,  intVal($index), $pagination, $base, $id );
}

if(!empty($_POST['data'])){
  $ids = $_POST['ids']; 
  $search = new searchClass();
  $base = BASE_URL;
echo $search->searchMatches($_POST['data'], intVal($session_uid),  $base, $ids);
}

