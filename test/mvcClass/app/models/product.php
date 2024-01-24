<?php
    namespace App\models;
    // require_once "db.php";
    use App\models\DB;
    
    class Product extends DB{
        // hiển thị
        function getProduct(){
            $sql = "select * from product";
            return $this->getData($sql);
        }
        // add
        function add($name, $price, $quantity){
            $sql = "insert into product(name,price,quantity) values('$name', '$price', '$quantity')";
            return $this->getData($sql, false);
        }
        // delete
        function delete($id){
            $sql = "DELETE FROM product WHERE id =".$id;
            return $this->getData($sql, false);
        }
        // update
        function editView($id){
            $sql = "select * from product WHERE id=".$id;
            return $this->getData($sql,false);
        }
        function update($id, $name, $price, $quantity){
            $sql = "UPDATE product SET name='$name',price='$price',quantity='$quantity' WHERE id=".$id;
            return $this->getData($sql,false);
        }
    }
   
?>