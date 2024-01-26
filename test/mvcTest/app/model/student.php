<?php
    namespace App\models;
    use App\Models\Db;

    class Student extends Db{
        // viewAll
        function getStudent(){
            $sql = "SELECT * FROM student";
            return $this->getData($sql);
        }
    }
?>