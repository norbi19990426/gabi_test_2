<?php 

class Connection {

    private $dsn = "mysql:host=localhost;dbname=gyakorlas;charset=utf8mb4;port=3306";
    private $user = "root";
    private $password = "";
    public $conn;

    public function __construct(){

        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo "A PDO kapcsolat sikertelen: ".$e;
        }
    }
}