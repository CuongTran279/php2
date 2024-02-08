<?php
    namespace App\controller;
    use App\model\Product;
    use eftec\bladeone\BladeOne;

    class productController{
        public $view;
        function __construct(){
            $view = "app/view";
            $cache = "app/cache";
            $this->view = new BladeOne($view,$cache,BladeOne::MODE_AUTO);
        }

        function view(){
            $product = new Product();
            $items1 = $product->viewAll();
            return $this->view->run('list' , ['items'=>$items1]);
        }

        function add(){
            return $this->view->run('add');
        }

        function addProduct(){
            if(isset($_POST['submit'])){
                $product = new Product();
                $upload = "upload/";
                $img = $_FILES['img']['name'];
                $file = $upload. basename($img);
                if(move_uploaded_file($_FILES['img']['tmp_name'], $file)){}else{}
                $product->add($_POST['name'],$img,$_POST['price'],$_POST['quantity']);
                header('Location:'.route(''));
            }
        }

        function delete($id){
            $product = new Product();
            $product->delete($id);
            header('Location:'.route(''));
        }

        function edit($id){
            $product = new Product();
            $item1 = $product->viewId($id);
            return $this->view->run('edit',['item'=>$item1]);
        }

        function editProduct($id){
            if(isset($_POST['submit'])){
                $product = new Product();
                $upload = "upload/";
                $img = $_FILES['img']['name'];
                $file = $upload. basename($img);
                if(move_uploaded_file($_FILES['img']['tmp_name'], $file)){}else{}
                $product->edit($id,$_POST['name'],$img,$_POST['price'],$_POST['quantity']);
                header('Location:'.route(''));
            }
        }
    }
?>