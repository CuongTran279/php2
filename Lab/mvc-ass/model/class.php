<?php
    require_once "connect.php";

    class lop extends Connect{
        function view(){
            $sql = "SELECT * FROM class order by id DESC";
            return $this->viewAll($sql);
        }
        function add($name){
            $sql = "INSERT INTO class(name) VALUES ('$name')";
            return $this->viewAll($sql,false);
        }

        function viewClassId($id){
            $sql = "SELECT * FROM class WHERE id =".$id;
            return $this->viewAll($sql,false);
        }
        function edit($id,$name){
            $sql = "UPDATE class SET name='$name' WHERE id=".$id;
            return $this->viewAll($sql,false);
        }

        function delete($id){
            $sql = "DELETE FROM class WHERE id=".$id;
            return $this->viewAll($sql);
        }
    }
?>