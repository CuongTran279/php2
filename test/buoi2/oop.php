<?php
    class Tong{
        public $a = 3;
        public $b = 5;
        function tinhTong($a, $b){
            return $a + $b;
        }
    }

    $obj = new Tong();
    echo $obj->a;
    echo $obj->tinhTong(7,4);
    echo $obj->tinhTong($obj->a, $obj->b);
?>