<?php
    require_once "model/class.php";
    class Clas extends lop{
        public function listClass(){
            $viewClass = $this->view();
            require_once "view/class/listClass.php";
        }
        public function addClass(){
            require_once "view/class/addClass.php";
        }
        public function updtClass(){
            require_once "view/class/updateClass.php";
        }
        public function dltClass(){
            $viewClass = $this->view();
            require_once "view/class/listClass.php";
        }
    }
?>