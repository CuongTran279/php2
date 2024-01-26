<?php
    namespace App\model;
    use App\model\Db;

    class categories extends Db{
        // View categories
        function viewCategories(){
            $sql = "SELECT * FROM categories";
            return $this->getData($sql);
        }
        function viewCategoriesById($id){
            $sql = "SELECT * FROM categories WHERE id=".$id;
            return $this->getData($sql,false);
        }

        // Add categories
        function addCategories($name){
            $creat = date("Y-m-d H:i:s");
            $sql = "INSERT INTO categories(name,created_at,update_at) VALUES ('$name','$creat','$creat')";
            return $this->getData($sql,false);
        }

        // Delete categories
        function deleteCategories($id){
            $sql = "DELETE FROM categories WHERE id=".$id;
            return $this->getData($sql,false);
        }

        // Update categories
        function updateCategories($id,$name){
            $creat = date("Y-m-d H:i:s");
            $sql = "UPDATE categories SET name='$name',update_at='$creat' WHERE id=".$id;
            return $this->getData($sql,false);
        }
    }
?>