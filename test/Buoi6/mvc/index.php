<?php
    require_once "controllers/productController.php";

    $url = isset($_GET["url"])==true ? $_GET["url"] :"/";

    switch ($url) {
        case "/":
            listProduct();
        break;
        case "addProduct":
            if(isset($_POST["submit"])){
                add($_POST['name'],$_POST['price'],$_POST['quantity']);
                header('Location: index.php');
            }
            addProduct();
        break; 
    }
?>