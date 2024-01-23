<?php
    class Crush{
        public $hoTen;
        public $namSinh;
        public $gioiTinh;
        public $diaChi;
        public $sdt;

        public function setHoten($hoTen){
            return $this->hoTen = $hoTen;
        }
        public function getHoten(){
            return $this->hoTen;
        }
        public function setNamSinh($namSinh){
            return $this->namSinh = $namSinh;
        }
        public function getNamSinh(){
            return $this->namSinh;
        }
        public function setGioiTinh($gioiTinh){
            return $this->gioiTinh = $gioiTinh;
        }
        public function getGioiTinh(){
            return $this->gioiTinh;
        }
        public function setDiaChi($diaChi){
            return $this->diaChi = $diaChi;
        }
        public function getDiaChi(){
            return $this->diaChi;
        }
        public function setSdt($sdt){
            return $this->sdt = $sdt;
        }
        public function getSdt(){
            return $this->sdt;
        }

        public function __construct($hoTen,$namSinh,$gioiTinh,$diaChi,$sdt){
            $this->hoTen = $hoTen;
            $this->namSinh = $namSinh;
            $this->gioiTinh = $gioiTinh;
            $this->diaChi = $diaChi;
            $this->sdt = $sdt;
        }

        public function tinhTuoi(){
            return date("Y") - $this->getNamSinh();
        }

        public function layChong(){
            if( $this->tinhTuoi() >= 18){
                echo "<br>Lay chong";
            }else{
                echo "<br>Chua lay chong";
            }
        }

        public function inThongTin(){
            echo "Thong tin crush: "."<br>";
            echo "Ten: ".$this->getHoten()."<br>";
            echo "Nam Sinh: ".$this->getNamSinh()."<br>";
            echo "Gioi tinh: ".$this->getGioiTinh()."<br>";
            echo "Dia chi: ".$this->getDiaChi()."<br>";
            echo "SDT: ".$this->getSdt()."<br>";
        }

        
    }
    $obj = new Crush("Nguyen van b",2003,"Nu","Nam Dinh","0942143124");
    echo $obj->inThongTin();
    echo "Tuoi: ".$obj->tinhTuoi();
    echo $obj->layChong();
?>