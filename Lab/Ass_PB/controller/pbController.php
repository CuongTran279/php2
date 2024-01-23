<?php
    require_once "model/phongBan.php";

    class pbController extends phongBanModel{
        function view(){
            $view = $this->viewPhongBan();
            require_once "view/list.php";
        }
        function add(){
            require_once "view/add.php";
        }
        function edit(){
            require_once "view/edit.php";
        }
        function delete(){
            require_once "view/list.php";
        }
    }
?>