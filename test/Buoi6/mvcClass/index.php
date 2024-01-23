<?php
    require_once "controllers/productController.php";

    $url = isset($_GET["url"])==true ? $_GET["url"] :"/";
    $controller = new ProductController();
    switch ($url) {
        case "/":
            $controller->listProduct();
        break;
        case "addProduct":
            if(isset($_POST["submit"])){
                $pro = new Product();
                $pro->add($_POST['name'],$_POST['price'],$_POST['quantity']);
                header('Location: index.php');
            }
            $controller->addProduct();
        break; 
    }
?>