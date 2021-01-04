<?php 
class searchClass{
  public function searchMatches($data, $session_uid, $index, $pagination){
    if(!empty($data)){
      $data = $data;
      $uid = $session_uid ;
      $db = getDB();
      $stmt = $db->prepare("SELECT * FROM afiliaciones WHERE id LIKE '%". $data . "%' OR nombre LIKE '%". $data . "%' OR cedula LIKE '%". $data . "%' OR telefono LIKE '%". $data . "%' OR ciudad LIKE '%". $data . "%' OR email LIKE '%". $data . "%' OR f_afiliacion LIKE '%". $data . "%' LIMIT $index, $pagination");
      $stmt->bindParam("data", $data, PDO::PARAM_STR);
      $stmt->bindParam("index", $index, PDO::PARAM_INT);
      $stmt->bindParam("pagination", $pagination, PDO::PARAM_INT);
       $stmt->execute();
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC); //User data
    };
    if($stmt->rowCount() <= 0){
      echo $message = "<p>No hay resultados</p>";
    }else{
    
    foreach($data as $datas) {
      if($datas['id_users'] == $uid){ //no show all results
        echo $message = '<tr>
      <th scope="row">'.$datas['id'].'</th>
      <td>'.$datas['nombre'].'</td>
      <td>'.$datas['cedula'].'</td>
      <td>'.$datas['telefono'].'</td>
      <td>'.$datas['ciudad'].'</td>
      <td>'.$datas['email'].'</td>
      <td>'.$datas['f_afiliacion'].'</td>
      <td>
        <a href="#"><span class="icon ion-md-eye lead" style="color:var(--primary)"></span></a>
        <a href="#"><span class="icon ion-md-create lead" style="color:var(--orange)"></span></a>
        <a href="#"><span class="icon ion-md-trash lead" style="color:var(--red);"></span></a>
      </td>
    </tr>';
      } //end if
      
    
    }//end foreach
    
    } //end else
    
  } //end searchmatch()
  
}
/* 

public function searchMatches($data, $session_uid, $index, $pagination){
    if(!empty($data)){
      $uid = $session_uid ;
      $db = getDB();
      $stmt = $db->prepare("SELECT * FROM afiliaciones WHERE id LIKE '%". $data . "%' OR nombre LIKE '%". $data . "%' OR cedula LIKE '%". $data . "%' OR telefono LIKE '%". $data . "%' OR ciudad LIKE '%". $data . "%' OR email LIKE '%". $data . "%' OR f_afiliacion LIKE '%". $data . "%' LIMIT $index, 4");
     $stmt->bindParam("data", $data, PDO::PARAM_STR);
     $stmt->bindParam("index", $index, PDO::PARAM_INT);
     $stmt->bindParam("pagination", $pagination, PDO::PARAM_INT);
      $stmt->execute();
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC); //User data
    };
    if($stmt->rowCount() <= 0){
      
        return $message = "<p>No hay resultados</p>";
    }else{
    
    foreach($data as $datas) {
      if($datas['id_users'] == $uid){ //no show all results
        
        return $message = '<tr>
      <th scope="row">'.$datas['id'].'</th>
      <td>'.$datas['nombre'].'</td>
      <td>'.$datas['cedula'].'</td>
      <td>'.$datas['telefono'].'</td>
      <td>'.$datas['ciudad'].'</td>
      <td>'.$datas['email'].'</td>
      <td>'.$datas['f_afiliacion'].'</td>
      <td>
        <a href="#"><span class="icon ion-md-eye lead" style="color:var(--primary)"></span></a>
        <a href="#"><span class="icon ion-md-create lead" style="color:var(--orange)"></span></a>
        <a href="#"><span class="icon ion-md-trash lead" style="color:var(--red);"></span></a>
      </td>
    </tr>';
      } //end if
      
    
    }//end foreach
    
    } //end else
    
  } //end searchmatch() */