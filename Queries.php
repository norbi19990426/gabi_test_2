<?php 
include_once "Connection.php";
class Queries extends Connection{


    public function getUsers(){
        $sql = $this->conn->prepare("SELECT * FROM users");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}