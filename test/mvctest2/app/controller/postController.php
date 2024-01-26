<?php
    namespace App\controller;
    use App\models\post;
    class postController{
        function view(){
            $obj = new post();
            $items = $obj->viewAll();
            require_once "app/view/list.php";
        }

        function add(){
            require_once "app/view/add.php";
        }

        function addPost(){
            if(isset($_POST["submit"])){
                $obj = new post();
                $obj->add($_POST['title'],$_POST['content']);
                header ("Location:list");
            }
        }

        function editView(){
            if(isset($_GET["id"])){
                $obj = new post();
                $item = $obj->viewEdit($_GET["id"]);
                require_once "app/view/edit.php";
            }
        }
        function edit(){
            if(isset($_POST['update'])){
                $obj = new post();
                if(isset($_GET["id"])){
                    $obj->edit($_GET['id'],$_POST['title'],$_POST['content']);
                    header ("Location: list");
                }
            }
        }
        
        function delete(){
            if(isset($_GET["id"])){
                $obj = new post();
                $obj->delete($_GET['id']);
                header ("Location: list");
            }
        }
    }
?>