<?php
    // require_once 'app/ConNguoi.php';
    require_once 'vendor/autoload.php';
    
    use Cuong\Mvc\ConNguoi;
    $conNguoi = new ConNguoi();
    $conNguoi->hanhDong();
    
?>