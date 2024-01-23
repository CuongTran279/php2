<?php
    //Kiểu dữ liệu
    $a = 1 ; // Số nguyên
    $mang = array(1,2,3);
    $mang2 = [4,5,6];
    for($i=0;$i < count($mang);$i++){
        echo $mang[$i]."<br>";
    }
    foreach($mang as $a){
        echo $a;
    }
    $mlh = [
        "a"=>1,
        "b"=>2,
        "c"=>3,
        "d"=>4
    ];
    function dt($a,$b){
        echo "Dt: ".($a*$b);
    }
    dt(3,5);

    // Bài tập
    function thongTin($ten,$namSinh,$diaChi,$email){
        $tuoi = date("Y") - $namSinh;
        echo "Tên: ".$ten."<br>";
        echo "Tuoi: ".$tuoi."<br>";
        echo "Địa chỉ: ".$diaChi."<br>";
        echo "Email: ".$email."<br>";
    }
    thongTin("Cuong",2003,"NamDinh","9215hjc@gaml.com");
?>
