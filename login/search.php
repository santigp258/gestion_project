<?php 

include('../includes/config.php');
include('./session.php');

$message = '';
if(!empty($_POST['data'])){
  $data = $_POST['data'];
  $uid = $session_uid ;
  $db = getDB();
  $stmt = $db->prepare("SELECT * FROM afiliaciones WHERE id_users=:uid AND nombre LIKE '%". $data . "%'");
 $stmt->bindParam("uid", $uid, PDO::PARAM_INT);
 // $stmt->bindParam("data", $data, PDO::PARAM_STR);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data
};
if($stmt->rowCount() <= 0){
  $message = "<p>No hay resultados</p>";
}else{
while($datas = $data) { 
  $message = '<tr>
  <th scope="row">'.$datas->id.'</th>
  <td>'.$datas->nombre.'</td>
  <td>'.$datas->cedula.'</td>
  <td>'.$datas->telefono.'</td>
  <td>'.$datas->ciudad.'</td>
  <td>'.$datas->email.'</td>
  <td>'.$datas->f_afiliacion.'</td>
  <td>
    <a href="#"><span class="icon ion-md-eye lead" style="color:var(--primary)"></span></a>
    <a href="#"><span class="icon ion-md-create lead" style="color:var(--orange)"></span></a>
    <a href="#"><span class="icon ion-md-trash lead" style="color:var(--red);"></span></a>
  </td>
</tr>';
}
 /*  */
}

echo $message;

//html for consult
?> 

