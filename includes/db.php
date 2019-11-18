<?php
session_start();
class ConnectDB{
    private $host;
    private $user;
    private $pass;
    private $db;
    function constructor($host, $user, $pass, $db){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
    }
    function connect(){
        $connection = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        if(!$connection){
            echo 'Lost connection to the DataBase';
            die();
        }
        return $connection;
    }
}
$connect = new ConnectDB();
$connect->constructor('localhost','admin_db','aa9foofieKoh','admin_db');
$conn = $connect->connect();
?>