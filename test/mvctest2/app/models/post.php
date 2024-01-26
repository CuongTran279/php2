<?php
    namespace App\models;
    use App\models\Db;

    class post extends Db {
        function viewAll(){
            $sql = "SELECT * FROM  post ";
            return $this->getData($sql);
        }

        function add($title,$content){
            $creat = date('Y-m-d H:i:s');
            $sql = "INSERT INTO post(title, content, create_at, update_at) VALUES ('$title','$content','$creat','$creat')";
            return $this->getData($sql,false);
        }

        function delete($id){
            $sql = "DELETE FROM post WHERE id=".$id;
            return $this->getData($sql,false);
        }

        function viewEdit($id){
            $sql = "SELECT * FROM  post WHERE id=".$id;
            return $this->getData($sql,false);
        }

        function edit($id,$title,$content){
            $creat = date("Y-m-d H:i:s");
            $sql = "UPDATE post SET title='$title',content='$content',update_at='$creat' WHERE id=".$id;
            return $this->getData($sql,false);
        }
    }
?>