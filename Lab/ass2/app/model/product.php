<?php
    namespace App\model;
    use App\model\Db;

    class product extends Db{
        // View product
        function viewProduct(){
            $sql = "SELECT * FROM product";
            return $this->getData($sql);
        }
        function viewProductById($id){
            $sql = "SELECT * FROM product WHERE id=".$id;
            return $this->getData($sql,false);
        }

        // Add product
        function addProduct($name,$price,$quantity,$img,$id_categories){
            $creat = date("Y-m-d H:i:s");
            $sql = "INSERT INTO product(name, price, quantity, img, id_categories,created_at,update_at) VALUES ('$name','$price','$quantity','$img','$id_categories','$creat','$creat')";
            return $this->getData($sql,false);
        }

        // Delete product
        function deleteProduct($id){
            $sql = "DELETE FROM product WHERE id=".$id;
            return $this->getData($sql,false);
        }

        // Update product
        function updateProduct($id,$name,$price,$quantity,$img,$id_categories){
            $creat = date("Y-m-d H:i:s");
            if($img != ""){
                $sql = "UPDATE product SET name='$name',price='$price',quantity='$quantity',img='$img',id_categories='$id_categories',update_at='$creat' WHERE id=".$id;
            }else{
                $sql = "UPDATE product SET name='$name',price='$price',quantity='$quantity',id_categories='$id_categories',update_at='$creat' WHERE id=".$id;
            }
            return $this->getData($sql,false);
        }
        // function updateProduct($id,$name,$price,$quantity,$img,$id_categories){
        //     $creat = date("Y-m-d H:i:s");
        //     if($img != ""){
        //         $sql = "UPDATE product SET name='$name',price='$price',quantity='$quantity',img='$img',id_categories='$id_categories',update_at='$creat' WHERE id=".$id;
        //     }else{
        //         $sql = "UPDATE product SET name='$name',price='$price',quantity='$quantity',id_categories='[value-6]',update_at='$creat' WHERE id=".$id;
        //     }
        //     return $this->getData($sql,false);
        // }
    }
?>