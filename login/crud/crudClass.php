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
    } // end createAffiliation

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

    public function updatedAffiliation($nombre, $cedula, $telefono, $ciudad, $email, $f_afiliacion, $id)
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("UPDATE `afiliaciones` SET `nombre`=:nombre,`cedula`=:cedula, `telefono`=:telefono , `ciudad`=:ciudad, `email`=:email, `f_afiliacion`=:f_afiliacion ,`updatedAt`= CURRENT_TIMESTAMP WHERE `id`=:id");
            $stmt->bindParam("nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindParam("cedula", $cedula, PDO::PARAM_STR);
            $stmt->bindParam("telefono", $telefono, PDO::PARAM_STR);
            $stmt->bindParam("ciudad", $ciudad, PDO::PARAM_STR);
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->bindParam("f_afiliacion", $f_afiliacion, PDO::PARAM_STR);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();

            $db = null;
            return true;
        } catch (PDOException $e) {

            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    } //end updatedAffiliation


    public function showUserBySessionId($id)
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

    public function updatedUserProfile($username, $password, $email, $uid)
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("UPDATE `users` SET `username`=:username,`password`=:hash_password ,`email`=:email ,`updated_At`= CURRENT_TIMESTAMP WHERE `uid`=:uid");
            $stmt->bindParam("username", $username, PDO::PARAM_STR);
            $hash_password = hash('sha256', $password); //Password encryption
            $stmt->bindParam("hash_password", $hash_password, PDO::PARAM_STR);
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->bindParam("uid", $uid, PDO::PARAM_INT);
            $stmt->execute();
            $db = null;
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }
}
