<?php 

include('../includes/config.php');
include('./session.php');
include('./searchClass.php');





  //pagination
  $uid = $session_uid ;
  $db = getDB();
  $data = $_POST['data'];
  $stmt = $db->prepare("SELECT * FROM afiliaciones WHERE id LIKE '%". $data . "%' OR nombre LIKE '%". $data . "%' OR cedula LIKE '%". $data . "%' OR telefono LIKE '%". $data . "%' OR ciudad LIKE '%". $data . "%' OR email LIKE '%". $data . "%' OR f_afiliacion LIKE '%". $data . "%' ORDER BY nombre");
  $stmt->bindParam("uid", $uid, PDO::PARAM_INT);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data

  //count 
  $pagination = 4; //data for page
  $total_register_db = $stmt->rowCount();
  $round = $total_register_db/$pagination; //calculate
  $pages = ceil($round); //round

  $index =  $_POST['index']* $pagination;
  
  
  
  $search = new searchClass();
   $search->searchMatches($_POST['data'], intVal($session_uid), $index, $pagination);