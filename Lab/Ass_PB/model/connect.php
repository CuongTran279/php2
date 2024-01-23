<?php
    require_once "env.php";

    class Connect{
        function getConnet(){
            $connect = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME.";charset=".DBCHARSET, DBUSER, DBPASS);
            return $connect;
        }

        function viewAll($sql,$viewAll = true){
            $conn = $this->getConnet();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            if($viewAll){
                return $stmt->fetchAll();
            }
            return $stmt->fetch();
        }
    }
?>