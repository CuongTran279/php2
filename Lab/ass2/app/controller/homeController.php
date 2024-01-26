<?php
    namespace App\controller;
    use App\model\categories;
    use App\model\user;
    use App\model\product;

    class homeController {
        // Home
        function home(){
            require_once "app/view/Home/homeAdmin.php";
        }
        // Product
        function viewAllProduct() {
            $product = new product();
            $items = $product->viewProduct();
            require_once "app/view/Product/list.php";
        }
        function viewIdProduct() {
            if(isset($_GET["id"])){
                $product = new product();
                $id = $_GET["id"];
                $item = $product->viewProductById($id);
                require_once "app/view/Product/edit.php";
            }
        }
        function addP(){
            require_once "app/view/Product/add.php";
        }
        function addProduct() {
            if(isset($_POST["submit"])){
                $product = new product();
                $product->addProduct($_POST['name'],$_POST['price'],$_POST['quantity'],$_POST['img'],$_POST['id_categories']);
                header ('Location: ListProduct');
            }
        }

        function deleteProduct() {
            if(isset($_GET["id"])){
                $product = new product();
                $id = $_GET["id"];
                $product->deleteProduct($id);
                header ('Location: ListProduct');
            }
        }

        function editProduct() {
            if(isset($_POST['submit'])){
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    $product = new product();
                    $product->updateProduct($id,$_POST['name'],$_POST['price'],$_POST['quantity'],$_POST['img'],$_POST['id_categories']);
                    header ('Location: ListProduct');
                }
            }
        }
        // Categories
        function viewAllCategories(){
            $categories = new categories();
            $items = $categories->viewCategories();
            require_once "app/view/Categories/list.php";
        }

        function viewIdCategories() {
            if(isset($_GET["id"])){
                $categories = new categories();
                $id = $_GET["id"];
                $item = $categories->viewCategoriesById($id);
                require_once "app/view/Categories/edit.php";
            }
        }
        function addCategories() {
            if(isset($_POST["submit"])){
                $categories = new categories();
                $categories->addCategories($_POST['name']);
                header ('Location: ListCategories');
            }
        }
        function addC(){
            require_once "app/view/Categories/add.php";
        }
        function deleteCategories() {
            if(isset($_GET["id"])){
                $categories = new categories();
                $id = $_GET["id"];
                $categories->deleteCategories($id);
                header ('Location: ListCategories');
            }
        }

        function editCategories() {
            if(isset($_POST['submit'])){
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    $categories = new categories();
                    $categories->updateCategories($id,$_POST['name']);
                    header ('Location: ListCategories');
                }
            }
        }
        // User
        function viewAllUser(){
            $user = new user();
            $items = $user->viewUser();
            require_once "app/view/User/list.php";
        }
        function viewIdUser() {
            if(isset($_GET["id"])){
                $user = new user();
                $id = $_GET["id"];
                $item = $user->viewUserById($id);
                require_once "app/view/User/edit.php";
            }
        }
        function addUser() {
            if(isset($_POST["submit"])){
                $user = new user();
                $user->addUser($_POST['name'],$_POST['pass'],$_POST['email']);
                // header ('Location: ListProduct');
            }
        }
        function addU(){
            require_once "app/view/User/add.php";
        }
        function deleteUser() {
            if(isset($_GET["id"])){
                $user = new user();
                $id = $_GET["id"];
                $user->deleteUser($id);
                header ('Location: ListUser');
            }
        }

        function editUser() {
            if(isset($_POST['submit'])){
                if(isset($_GET["id"])){
                    $id = $_GET["id"];
                    $user = new user();
                    $user->updateUser($id,$_POST['role']);
                    header ('Location: ListUser');
                }
            }
        }
    }
?>