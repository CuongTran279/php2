<?php
    require_once "db.php";

    function getProduct(){
        $sql = "SELECT * FROM product";
        return getData($sql);
    }
    function add($name,$price,$quantity){
        $sql = "INSERT INTO product(name,price,quantity) values('$name','$price','$quantity')";
        return getData($sql,false);
    }
?>