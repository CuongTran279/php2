<?php
    // tạo class TinhToan gồm numberA, numberB
    // các phương thức tinhTong, tinhHieu, tinhTich, tinhThuong

    // tạo class TinhToan
    class TinhToan{
        // thuộc tính
        public $numberA = 4;
        public $numberB = 8;
        // var $numberA, $numberB;

        // hằng số
        const MSG_CONTENT = "PHP 2";

        // phương thức
        function tinhTong($numberA, $numberB){
            return $numberA+$numberB;
        }
        function tinhHieu($numberA, $numberB){
            return $numberA-$numberB;
        }
        function tinhTich($numberA, $numberB){
            return $numberA*$numberB;
        }
        function tinhThuong($numberA, $numberB){
            if($numberB == 0){
                echo "phép chia sai";
            }else{
                return $numberA/$numberB;
            }          
        }  
        // hàm gán giá trị cho numberA
        function setNumberA($value){
            $this->numberA = $value;
        }
        // hàm lấy giá trị numberA
        function getNumberA(){
            return $this->numberA;
        }

        // hàm khởi tạo
        function __construct($a, $b){
            $this->numberA = $a;
            $this->numberB = $b;
        }

        function inThongTin(){
            echo "Giá trị A là: ".$this->getNumberA();    
        }

    }
    // khởi tạo đối tượng
    // $obj = new TinhToan();
    $obj1 = new TinhToan(4, 5);

    // lấy giá trị thuộc tính
    // echo $obj->numberA;
    // echo "<br>";
    // echo $obj->numberB;
    echo $obj1->inThongTin();

    // echo "<br>Tổng là: ".$obj->tinhTong($obj->numberA,$obj->numberB);
    // echo "<br>Hiệu là: ".$obj->tinhHieu($obj->numberA,$obj->numberB);
    // echo "<br>Tích là: ".$obj->tinhTich($obj->numberA,$obj->numberB);
    // echo "<br>Thương là: ".$obj->tinhThuong($obj->numberA,$obj->numberB);

    // // gán giá trị mới cho numberA
    // echo "<br>";
    // // $obj->numberA = 22;
    // // echo $obj->numberA;

    // $obj->setNumberA(22);
    // echo $obj->getNumberA();

    // // gọi hằng
    // echo "<br>";
    // echo $obj::MSG_CONTENT;
?> 