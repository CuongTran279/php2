<?php
    namespace App\model;
    use App\model\Db;

    class user extends Db{
        // View user
        function viewUser(){
            $sql = "SELECT * FROM user";
            return $this->getData($sql);
        }
        function viewUserById($id){
            $sql = "SELECT * FROM user WHERE id=".$id;
            return $this->getData($sql,false);
        }
        function checkUser($name,$pass){
            $sql = "SELECT * FROM user WHERE name = '".$name."' AND pass = '".$pass."'";
            return $this->getData($sql,false);
        }
        // Add user
        function addUser($name,$pass,$email){
            $creat = date("Y-m-d H:i:s");
            $sql = "INSERT INTO user(name, pass, email, created_at,update_at) VALUES ('$name','$pass','$email','$creat','$creat')";
            return $this->getData($sql,false);
        }

        // Delete user
        function deleteUser($id){
            $sql = "DELETE FROM user WHERE id=".$id;
            return $this->getData($sql,false);
        }

        // Update user
        function updateUser($id,$role){
            $creat = date("Y-m-d H:i:s");
            $sql = "UPDATE user SET role='$role',update_at='$creat' WHERE id=".$id;
            return $this->getData($sql,false);
        }
    }
?>