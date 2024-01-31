<?php
    namespace App\model;
    USE PDO;
    require_once "env.php";

    class db{
        function connect(){
            $connect = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME.";charset=".DBCHARSET, DBUSER, DBPASS);
            return $connect;
        }

        function getData($sql,$getAll = true){
            $conn = $this->connect();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            if($getAll){
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            return $stmt->fetch();
        }
    }
?>