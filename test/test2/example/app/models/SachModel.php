<?php 
    // include_once "app/models/BaseModel.php";
    namespace App\models;
    use App\models\BaseModel;
    class SachModel extends BaseModel{
        function getAllSach(){
            $sql = "select * from sach";
            return $this->getAllData($sql);
        }
        function add($name,$author,$quantity,$price){
            $sql = "INSERT INTO sach(tenSach, tacGia, soLuong, gia) VALUES ('$name','$author','$quantity','$price')";
            return $this->getRowData($sql);
        }
        public function edit($id,$name,$author,$quantity,$price){
            $sql = "UPDATE sach SET tenSach='$name',tacGia='$author',soLuong='$quantity',gia='$price' WHERE idSach=".$id;
            return $this->getRowData($sql);
        }
        public function viewId($id){
            $sql = "select * from sach WHERE idSach=".$id;
            return $this->getRowData($sql);
        }
        public function delete($id){
            $sql = "DELETE FROM `sach`WHERE idSach=".$id;
            return $this->getRowData($sql);
        }
    }
    
?>