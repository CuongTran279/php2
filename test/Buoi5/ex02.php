<?php
    // require_once 'AuthInterface.php';
    // require_once 'Auth.php';

    // $obj = new Auth();
    // $obj->login();

    require_once 'admin/admin.php';
    require_once 'user/user.php';

    $obj1 = new AdminNSP\thongTin();
    echo "<br>";
    $obj2 = new UserNSP\thongTin();
?>