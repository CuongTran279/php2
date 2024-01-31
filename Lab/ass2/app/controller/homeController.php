<?php
    namespace App\controller;
    use App\model\categories;
    use App\model\user;
    use App\model\product;
    use eftec\bladeone\BladeOne;
    session_start();
    $_SESSION['user'] = "";
    class homeController {
        public $view;
        function __construct(){
            $view = "app/view";
            $cache = "app/cache";
            $this->view = new BladeOne($view, $cache, BladeOne::MODE_AUTO);
        }
        // Home
        function homeAdmin(){
            require_once "app/view/Home/homeAdmin.php";
        }
        function homeUser(){
            require_once "app/view/Home/homeUser.php";
        }
        // Product
        function viewAllProduct() {
            $product = new product();
            $items1 = $product->viewProduct();
            $categories = new categories();
            $itemsC1 = $categories->viewCategories();
            // require_once "app/view/Product/list.php";
            $stt=1;
            $classView1 = "";
            foreach($items1 as $product) {
                foreach($itemsC1 as $categories) {
                    if($categories['id'] == $product['id_categories']){
                        $classView1 = $categories['name'];
                    }
                }
            } 
            return $this->view->run('Product.list',['items'=>$items1,'itemsC'=>$itemsC1,'i'=>$stt,'classView'=>$classView1]);
        }
        function viewIdProduct($id) {
            $product = new product();
            $categories = new categories();
            $itemsC1 = $categories->viewCategories();
            $item1 = $product->viewProductById($id);
            return $this->view->run('Product.edit',['itemsC'=>$itemsC1,'item'=>$item1]);
        }
        function addP(){
            $categories = new categories();
            $itemsC1 = $categories->viewCategories();
            return $this->view->run('Product.add',['itemsC'=> $itemsC1]);
        }
        function addProduct() {
            if(isset($_POST["submit"])){
                $categories = new categories();
                $itemsC = $categories->viewCategories();
                $product = new product();
                $img = $_FILES['img']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                } else {
                }
                $product->addProduct($_POST['name'],$_POST['price'],$_POST['quantity'],$img,$_POST['id_categories']);
                header ('Location:'.route('ListProduct'));
            }
        }

        function deleteProduct($id) {
            $product = new product();
            $product->deleteProduct($id);
            header ('Location:'.route('ListProduct'));
        }

        function editProduct($id) {
            if(isset($_POST['submit'])){
                    $categories = new categories();
                    $itemsC = $categories->viewCategories();
                    $product = new product();
                    $img = $_FILES['img']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    $product->updateProduct($id,$_POST['name'],$_POST['price'],$_POST['quantity'],$_POST['img'],$_POST['id_categories']);
                    header ('Location:'.route('ListProduct'));
            }
        }
        // Categories
        function viewAllCategories(){
            $categories = new categories();
            $items1 = $categories->viewCategories();
            $i = 1;
            return $this->view->run('Categories.list',['items'=>$items1 , 'stt'=>$i]);
        }

        function viewIdCategories($id) {
            $categories = new categories();
            $item1 = $categories->viewCategoriesById($id);
            return $this->view->run('Categories.edit',['item'=>$item1]);
        }
        function addCategories() {
            if(isset($_POST["submit"])){
                $categories = new categories();
                $categories->addCategories($_POST['name']);
                header ('Location:'.route('ListCategories'));
            }
        }
        function addC(){
            return $this->view->run('Categories.add');
        }
        function deleteCategories($id) {
            $categories = new categories();
            $categories->deleteCategories($id);
            header ('Location:'.route('ListCategories'));
        }

        function editCategories($id) {
            if(isset($_POST['submit'])){
                $categories = new categories();
                $categories->updateCategories($id,$_POST['name']);
                header ('Location:'.route('ListCategories'));
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
                $items = $user->viewUser();
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
                header ('Location: addU');
            }
        }

        function login(){
            if(isset($_POST["submit"])){
                $user = new user();
                $check = $user->checkUser($_POST['name'],$_POST['pass']);
                if (is_array($check)) {
                    $_SESSION['user'] = $check;
                    header ('Location: addU');
                } else {
                    if(!empty($_POST['name']) && !empty($_POST['pass'])){
                        echo  "Thông tin không đúng, vui lòng kiểm tra lại";
                    }
                }
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