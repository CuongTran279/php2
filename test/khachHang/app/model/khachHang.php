<?php
    namespace App\model;
    use App\model\db;

    class khachHang extends db{
        function viewAll(){
            $sql = "SELECT * FROM khachhang";
            return $this->getData($sql);
        }
        function add($name,$pass,$address,$email){
            $creat = date("Y-m-d H:i:s");
            $sql = "INSERT INTO khachhang(name, pass, address, email, created_at, update_at) VALUES ('$name','$pass','$address','$email','$creat','$creat')";
            return $this->getData($sql,false);
        }
        function viewById($id){
            $sql = "SELECT * FROM khachhang where id=".$id;
            return $this->getData($sql,false);
        }
        function edit($id,$name,$pass,$address,$email){
            $creat = date("Y-m-d H:i:s");
            $sql = "UPDATE khachhang SET name='$name',pass='$pass',address='$address',email='$email',update_at='$creat' WHERE id=".$id;
            return $this->getData($sql,false);
        }
        function delete($id){
            $sql = "DELETE FROM khachhang WHERE id=".$id;
            return $this->getData($sql,false);
        }
    }
?>