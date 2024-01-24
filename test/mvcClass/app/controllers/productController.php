<?php
    namespace App\controllers;
    // require_once 'app/models/product.php';

    use App\models\Product;
    class ProductController{
        function listProduct(){
            $obj = new Product();
            $product = $obj->getProduct();
            // var_dump($product);
            require_once 'app/views/product/list.php';
        }
        function addProduct(){
            require_once 'app/views/product/add.php';
        }
        function addPro(){
            if(isset($_POST['add'])){               
                $pro = new Product();
                $pro->add($_POST['name'],$_POST['price'],$_POST['quantity']);
                header("location: list");  
            }
        }
        function deletePro(){
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $pro = new Product();
                $pro->delete($id);
                header("location: list"); 
            }
            
        }

        function editView(){
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                $pro = new Product();
                $view = $pro->editView($id);
                require_once 'app/views/product/edit.php';
            }
        }

        function editProduct(){
            if(isset($_POST['sua'])){
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                    $pro = new Product();
                    $pro->update($id, $_POST['name'], $_POST['price'], $_POST['quantity']);
                }
                header("location: list");
            }
        }
        function hienThiSP(){
            echo "đây là phương thức hiển thị";
        }
    }
   
?>