<?php
    require_once "model/user.php";

    function listUser(){
        $user=getUser();
        require_once "view/list.php";
    }

    function addUser(){
        require_once "view/add.php";
    }

    function editUser(){
        require_once "view/update.php";
    }

    function deleteUser(){
        $user=getUser();
        require_once "view/list.php";
    }
?>