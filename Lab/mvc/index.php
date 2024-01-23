<?php
    require_once "controller/userController.php";
    $url = isset($_GET["url"])==true ? $_GET["url"] :"/";
    switch ($url) {
        case "/":
            listUser();
        break;
        case "add":
            if(isset($_POST["submit"])) {
                    $img = $_FILES['image']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    } else {
                    }
                add($_POST['name'],$_POST['tel'],$_POST['address'],$_POST['email'],$img);
                header("Location:index.php");
            }
            addUser();
        break;
        case 'updt':
            if(isset($_GET['id']) && ($_GET['id'] >0)){
                $id = $_GET['id'];
                $userId = selectUserById($id);
                if(isset($_POST["submit"])){
                    $img = $_FILES['image']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    update($id,$_POST['name'],$_POST['tel'],$_POST['address'],$_POST['email'],$img);
                    header("Location:index.php");
                }
            }
            include "view/update.php";
            editUser();
        break;
        case "delete":
            if(isset($_GET['id']) && ($_GET['id'] >0)){
                $id = $_GET['id'];
                delete($id);
                header("Location:index.php");
            }
            deleteUser();
        break;
    }
?>