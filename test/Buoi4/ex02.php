<?php
    class conNGuoi{
        public $hoTen,$namSinh,$diaChi,$email,$sdt;

        public function setHoTen($hoTen){
            $this->hoTen = $hoTen;
        }
        public function getHoTen(){
            return $this->hoTen;
        }

        public function setNamSinh($namSinh){
            $this->namSinh = $namSinh;
        }
        public function getNamSinh(){
            return $this->namSinh;
        }

        public function setDiaChi($diaChi){
            $this->diaChi = $diaChi;
        }
        public function getDiaChi(){
            return $this->diaChi;
        }

        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }

        public function setsdt($sdt){
            $this->sdt = $sdt;
        }
        public function getsdt(){
            return $this->sdt;
        }

        public function __construct($hoTen,$namSinh,$diaChi,$email,$sdt)
        {
            $this->hoTen=$hoTen;
            $this->namSinh=$namSinh;
            $this->diaChi=$diaChi;
            $this->email=$email;
            $this->sdt=$sdt;
        }

        public function tinhTuoi(){
            return (date("Y") - $this->namSinh);
        }

        private function hienThi(){
            echo "Tên : ".$this->getHoTen()."<br>"."Tuổi: ".$this->tinhTuoi()."<br>"."Địa chỉ: ".$this->getDiaChi()."<br>"."Email: ".$this->getEmail()."<br>"."SDT: ".$this->getsdt()."<br>";
        }

        public function inTT(){
            return $this->hienThi();
        }
    }

    class giangVien extends conNGuoi{
        public $soGioGiang,$luongGio;

        public function setSoGioGiang($soGioGiang){
            $this->soGioGiang = $soGioGiang;
        }
        public function getSoGioGiang(){
            return $this->soGioGiang;
        }

        public function setLuongGio($luongGio){
            $this->luongGio = $luongGio;
        }
        public function getLuongGio(){
            return $this->luongGio;
        }

        public function __construct($hoTen,$namSinh,$diaChi,$email,$sdt,$soGioGiang,$luongGio)
        {
            parent::__construct($hoTen,$namSinh,$diaChi,$email,$sdt);
            $this->soGioGiang=$soGioGiang;
            $this->luongGio=$luongGio;
        }

        public function tinhLuong(){
            return $this->getSoGioGiang() * $this->getLuongGio();
        }

        private function hienThi(){
            parent::inTT();
            echo "Số giờ giảng : ".$this->getSoGioGiang()."<br>"."Lượng giờ : ".$this->getLuongGio()."<br>"."Lương : ".$this->tinhLuong()."<br>";
        }
        public function in(){
            return $this->hienThi();
        }
    }

    $obj = new giangVien("Trần Văn A",2003,"Nam Định","8024fsahg@gag.com","02849124",20,5);
    $obj->in();
?>