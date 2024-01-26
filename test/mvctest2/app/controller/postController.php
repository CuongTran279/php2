<?php
    namespace App\controller;
    use App\models\post;
    class postController{
        function view(){
            $obj = new post();
            $item = $obj->viewAll();
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
                if(isset($_POST['submit'])){
                    $obj->edit($_GET['id'],$_POST['title'],$_POST['content']);
                    header ("Location:list");
                }
            }
        }
    }
?>