<?php
    require_once "connect.php";

    class students extends Connect{
        function views(){
            $sql = "SELECT * FROM student";
            return $this->viewAll($sql);
        }

        function add($name,$age,$img,$address,$class,$majors,$email){
            $sql = "INSERT INTO student(name, age, img, address, class,majors,email) VALUES ('$name','$age','$img','$address','$class','$majors','$email')";
            return $this->viewAll($sql,false);
        }
        function viewStudentId($id){
            $sql = "SELECT * FROM student WHERE id =".$id;
            return $this->viewAll($sql,false);
        }
        function edit($id,$name,$age,$img,$address,$class,$majors,$email){
            $sql = "UPDATE student SET name='$name',age='$age',img='$img',address='$address',class='$class',majors='$majors',email='$email' WHERE id=".$id;
            return $this->viewAll($sql,false);
        }
        function edit1($id,$name,$age,$address,$class,$majors,$email){
            $sql = "UPDATE student SET name='$name',age='$age',address='$address',class='$class',majors='$majors',email='$email' WHERE id=".$id;
            return $this->viewAll($sql,false);
        }
        function delete($id){
            $sql = "DELETE FROM student WHERE id=".$id;
            return $this->viewAll($sql);
        }
    }
?>