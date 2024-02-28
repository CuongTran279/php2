<?php 
    namespace App\models;
    use App\models\BaseModel;
    
    class SachModel extends BaseModel{
        function getAllSach(){
            $sql = "select * from sach";
            return $this->getAllData($sql);
        }
        function addSach($name,$author,$quantity,$price){
            $sql = "INSERT INTO sach(tenSach, tacGia, soLuong, gia) VALUES ('$name','$author','$quantity','$price')";
            return $this->getRowData($sql);
        }
        function editSach($id,$name,$author,$quantity,$price){
            $sql = "UPDATE sach SET tenSach='$name',tacGia='$author',soLuong='$quantity',gia='$price' WHERE idSach=".$id;
            return $this->getRowData($sql);
        }
        function getIdSach($id){
            $sql = "SELECT * from sach WHERE idSach=".$id;
            return $this->getRowData($sql);
        }
        function deleteSach($id){
            $sql = "DELETE FROM sach WHERE idSach=".$id;
            return $this->getRowData($sql);
        }
    }
   
?>