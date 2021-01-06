<?php
class searchClass
{
  public function searchMatches($data, $session_uid, $url, $idCreate)
  {
    if (isset($data)) {
      $data = $data;
      $uid = $session_uid;
      $db = getDB();
      $stmt = $db->prepare("SELECT * FROM afiliaciones WHERE id LIKE '%" . $data . "%' OR nombre LIKE '%" . $data . "%' OR cedula LIKE '%" . $data . "%' OR telefono LIKE '%" . $data . "%' OR ciudad LIKE '%" . $data . "%' OR email LIKE '%" . $data . "%' OR f_afiliacion LIKE '%" . $data . "%' ");
      $stmt->bindParam("data", $data, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC); //User data
    };
    if ($stmt->rowCount() <= 0) {
      echo $message = '<script src="../plugin/noResults.js"></script>';
    } else {

      foreach ($data as $datas) {
        if ($datas['id_users'] == $uid) { //no show all results
          echo $message = '<tr>
      <th scope="row" >' . $datas['id'] . '</th>
      <td>' . $datas['nombre'] . '</td>
      <td>' . $datas['cedula'] . '</td>
      <td>' . $datas['telefono'] . '</td>
      <td>' . $datas['ciudad'] . '</td>
      <td>' . $datas['email'] . '</td>
      <td>' . $datas['f_afiliacion'] . '</td>
      <td>
      <form action="' . $url . 'login/crud/delete.php" method="POST" class="delete" >
      <a href="' . $url . 'login/show.php?id=' . $datas['id'] . '"><span class="icon ion-md-eye lead" style="color:var(--primary)"></span></a>
      <a href="' . $url . 'login/edit.php?id=' . $datas['id'] . '"><span class="icon ion-md-create lead" style="color:var(--orange)"></span></a>
      <button type="submit" name="id"  value="' . $datas['id'] . '" style="border: none; background: transparent; cursor:pointer"><a ><span class="icon ion-md-trash lead" style="color:var(--red);"></span></a></button>
      </form>
      </td>
      <input type="hidden" value="' . $count . '" id="totalResults">
    </tr>';
        } //end if


      } //end foreach

    } //end else

  } //end searchmatch()


  public function showInformation($uid, $index, $pagination, $url, $idCreate) //uid/ dinamic index / total afilitions
  {

    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM afiliaciones WHERE id_users=:uid LIMIT $index, $pagination");
    $stmt->bindParam("uid", $uid, PDO::PARAM_INT);
    // $stmt->bindParam("index", $index, PDO::PARAM_INT);
    //$stmt->bindParam("pagination", $pagination, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC); //User data
    foreach ($data as $datas) {
      if ($datas['id_users'] == $uid) { //no show all results
        echo $message = '<tr>
    <th scope="row">' . $datas['id'] . '</th>
    <td >' . $datas['nombre'] . '</td>
    <td>' . $datas['cedula'] . '</td>
    <td>' . $datas['telefono'] . '</td>
    <td>' . $datas['ciudad'] . '</td>
    <td>' . $datas['email'] . '</td>
    <td>' . $datas['f_afiliacion'] . '</td>
    <td>
    <form action="' . $url . 'login/crud/delete.php" method="POST" class="delete">
    <a href="' . $url . 'login/show.php?id=' . $datas['id'] . '"><span class="icon ion-md-eye lead" style="color:var(--primary)"></span></a>
    <a href="' . $url . 'login/edit.php?id=' . $datas['id'] . '"><span class="icon ion-md-create lead" style="color:var(--orange)"></span></a>
    <button type="submit" name="id"  value="' . $datas['id'] . '" style="border: none; background: transparent; cursor:pointer"><a ><span class="icon ion-md-trash lead" style="color:var(--red);"></span></a></button>
    </form>
    </td>
    <input type="hidden" value="0" id="totalResults">
  </tr>';
      } //end if


    } //end foreach
  } //en showInformation
}
