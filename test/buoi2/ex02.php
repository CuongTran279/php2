<?php
// bài tập: tạo class SinhVien
// gồm các thuộc tính: hoTen, tuoi, diaChi, email, sdt;
// các phương thức get, set tương ứng, hàm khởi tạo
// có tham số đầy đủ, hàm inThongTin hiển thị tất cả dữ liệu trên
// Khởi tạo đối tượng và gọi hàm inThongTin


    class SinhVien{
        public $hoTen;
        public $tuoi;
        public $diaChi;
        public $email;
        public $sdt;

        function setHoTen($ten){
            $this->hoTen = $ten; 
        }

        function getHoTen(){
            return $this->hoTen;
        }
        function setTuoi($tuoi){
            $this->tuoi = $tuoi; 
        }

        function getTuoi(){
            return $this->tuoi;
        }
        function setDiaChi($diaChi){
            $this->diaChi = $diaChi; 
        }

        function getDiaChi(){
            return $this->diaChi;
        }
        function setEmail($email){
            $this->email = $email; 
        }
        function getEmail(){
            return $this->email;
        }
        function setSdt($sdt){
            $this->sdt = $sdt; 
        }
        function getSdt(){
            return $this->sdt;
        }
         // hàm khởi tạo
         function __construct($ten, $tuoi, $diaChi, $email, $sdt){
            $this->hoTen = $ten;
            $this->tuoi = $tuoi;
            $this->diaChi = $diaChi;
            $this->email = $email;
            $this->sdt = $sdt;
        }

        function inThongTin(){
            echo "Thông tin sinh viên: ";
            echo "<br>Tên: ".$this->getHoten();    
            echo "<br>Tuổi: ".$this->getTuoi();
            echo "<br>Địa chỉ: ".$this->getDiaChi();
            echo "<br>Email: ".$this->getEmail();
            echo "<br>Số điện thoại: ".$this->getSdt();
        }
    }

    $obj = new SinhVien('Nguyệt', 20, 'Nam Định', 'nguyet@gmail.com', '0398535275');
    echo $obj->inThongTin();
?>