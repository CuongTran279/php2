<?php
    namespace App\model;
    use App\model\connect;

    class Product extends connect{
        function viewAll(){
            $sql = "SELECT * FROM product ";
            return $this->getData($sql);
        }
        function viewId($id){
            $sql = "SELECT * FROM product WHERE id=".$id;
            return $this->getData($sql,false);
        }
        function add($name,$img,$price,$quantity){
            $creat = date("Y-m-d H:i:s");
            $sql = "INSERT INTO product(name, img, price, quantity, created_at, update_at) VALUES ('$name','$img','$price','$quantity','$creat','$creat')";
            return $this->getData($sql,false);
        }
        function delete($id){
            $sql = "DELETE FROM product WHERE id=".$id;
            return $this->getData($sql,false);
        }
        function edit($id,$name,$img,$price,$quantity){
            $creat = date("Y-m-d H:i:s");
            if($img != ""){
                $sql = "UPDATE product SET name='$name',img='$img',price='$price',quantity='$quantity',update_at='$creat' WHERE id=".$id;
            }else{
                $sql = "UPDATE product SET name='$name',price='$price',quantity='$quantity',update_at='$creat' WHERE id=".$id;
            }
            return $this->getData($sql,false);
        }
    }
?>