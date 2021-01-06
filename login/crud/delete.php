<?php
include('../../includes/config.php');
include('../searchClass.php');
if (isset($_POST['id'])) {
  $info = new searchClass();
  $id = $_POST['id'];
  $information = deleteById($id);
 /*  if ($information) {
    $base = BASE_URL;
    $pagination = 4;
    $index = $_POST['index'];
   echo  $info->showInformation(1,  intVal($index), $pagination, $base, $id );
  } */
}

function deleteById($id) //uid/ dinamic index / total afilitions
{
  try {
    $db = getDB();
    $stmt = $db->prepare("DELETE FROM afiliaciones WHERE id=:id");
    $stmt->bindParam("id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $db = null;
    return true;
  } catch (PDOException $e) {
    echo '{"error":{"text":' . $e->getMessage() . '}}';
  }
}
