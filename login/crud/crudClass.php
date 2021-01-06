<?php

class crudClass
{

    public function createAffiliation($nombre, $cedula, $telefono, $ciudad, $email, $f_afiliacion, $id_users)
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("INSERT INTO afiliaciones (nombre,cedula,telefono, ciudad, email, f_afiliacion, id_users) VALUES (:nombre,:cedula,:telefono,:ciudad, :email, :f_afiliacion, :id_users) ");
            $stmt->bindParam("nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam("cedula", $cedula, PDO::PARAM_STR);
            $stmt->bindParam("telefono", $telefono, PDO::PARAM_STR);
            $stmt->bindParam("ciudad", $ciudad, PDO::PARAM_STR);
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->bindParam("f_afiliacion", $f_afiliacion, PDO::PARAM_STR);
            $stmt->bindParam("id_users", $id_users, PDO::PARAM_INT);
            $stmt->execute();

            $db = null;
            return true;
        } catch (PDOException $e) {

            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }

    public function showAfiByid($id)
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("SELECT * FROM afiliaciones WHERE id=:id");
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data
            $db = null;
            return $data;
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    } //end showAfiById

    public function updatedAffiliation($nombre, $cedula, $telefono, $ciudad, $email, $f_afiliacion)
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("INSERT INTO afiliaciones (nombre,cedula,telefono, ciudad, email, f_afiliacion, id_users) VALUES (:nombre,:cedula,:telefono,:ciudad, :email, :f_afiliacion) ");
            $stmt->bindParam("nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam("cedula", $cedula, PDO::PARAM_STR);
            $stmt->bindParam("telefono", $telefono, PDO::PARAM_STR);
            $stmt->bindParam("ciudad", $ciudad, PDO::PARAM_STR);
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->bindParam("f_afiliacion", $f_afiliacion, PDO::PARAM_STR);
            $stmt->bindParam("id_users", $id_users, PDO::PARAM_INT);
            $stmt->execute();

            $db = null;
            return true;
        } catch (PDOException $e) {

            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    } //end updatedAffiliation


    function showUserBySessionId($id) 
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("SELECT * FROM users WHERE uid=:id");
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ); //User data
            $db = null;
            return $data;
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }
}
