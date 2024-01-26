<?php
    namespace App\models;
    use App\Models\Db;

    class Clas extends Db{
        // viewAll
        function getClass(){
            $sql = "SELECT * FROM class";
            return $this->getData($sql);
        }
    }
?>