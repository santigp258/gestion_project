<?php 

include('../includes/config.php');
include('./session.php');
include('./searchClass.php');

if(isset($_POST['dataShow'])){
  $pagination = 4;
  $index = $_POST['index']; 
  $uid = $session_uid;
  $show = new searchClass();
 echo $show->showInformation($uid,  intVal($index), $pagination);
}

if(!empty($_POST['data'])){
  $search = new searchClass();
echo $search->searchMatches($_POST['data'], intVal($session_uid));
}

