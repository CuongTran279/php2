<?php
    require_once "connect.php";

    function getUser(){
        $sql = "SELECT * FROM taikhoan";
        return getData($sql);
    }
    function add($name,$tel,$address,$email,$img){
        $sql = "INSERT INTO taikhoan(name,tel,address,email,img) values('$name','$tel','$address','$email','$img')";
        return getData($sql,false);
    }
    function selectUserById($id){
        $sql = "SELECT * FROM taikhoan WHERE id=".$id;
        return getData($sql,false);
    }
    function update($id,$name,$tel,$address,$email,$img){
        $sql = "UPDATE taikhoan SET name='$name',tel='$tel',address='$address',email='$email',img='$img' WHERE id=".$id;
        return getData($sql,false);
    }
    function delete($id){
        $sql = "DELETE FROM taikhoan WHERE id =".$id;
        return getData($sql);
    }
?>