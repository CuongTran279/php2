<?php
    namespace App\controller;
    use App\models\post;
    use eftec\bladeone\BladeOne;
    class postController{
        public $view;
        function __construct(){
            $view = "app/view";
            $cache = "app/cache";
            $this->view = new BladeOne($view, $cache, BladeOne::MODE_AUTO);
        }
        function view(){
            $obj = new post();
            $items = $obj->viewAll();
            return $this->view->run('list' , ['item1'=> $items]);
        }

        function add(){
            return $this->view->run('add');
        }

        function addPost(){
            if(isset($_POST["submit"])){
                $obj = new post();
                $obj->add($_POST['title'],$_POST['content']);
                header ("Location:list");
            }
        }

        function editView($id){
                $obj = new post();
                $item = $obj->viewEdit($id);
                return $this->view->run('edit' , ['item1'=> $item]);
        }
        function edit($id){
                $obj = new post();
                $obj->edit($id,$_POST['title'],$_POST['content']);
                header ("Location: ".route('list'));
        }
        
        function delete($id){
                $obj = new post();
                $obj->delete($id);
                header ("Location:".route('list'));
        }
    }
?>