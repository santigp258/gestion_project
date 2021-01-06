<?php
include('../../includes/config.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $information = deleteById($id);
  if ($information) {
    $url = BASE_URL . 'login/administrator.php';
    header('Location:' . $url);
  }
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
