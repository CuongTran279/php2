<?php 
    require "sinhVien.php";
    $obj = new SinhVien('Nguyệt', 20, 'Nam Định', 'nguyet@gmail.com', '0398535275');
    echo $obj->getInfor();
?>