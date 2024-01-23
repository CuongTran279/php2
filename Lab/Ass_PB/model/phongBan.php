<?php
    require_once "connect.php";

    class phongBanModel extends Connect{
        function viewPhongBan(){
            $sql = "SELECT * FROM phongban";
            return $this->viewAll($sql);
        }
        function addPhongBan($tenPb,$diaChi,$email){
            $sql = "INSERT INTO phongban(tenPb, diaChi, email) VALUES ('$tenPb','$diaChi','$email')";
            return $this->viewAll($sql,false);
        }
        
        function editPhongBan($maPb,$tenPb,$diaChi,$email){
            $sql = "UPDATE phongban SET tenPb='$tenPb',diaChi='$diaChi',email='$email' WHERE maPb=".$maPb;
            return $this->viewAll($sql,false);
        }
        function viewPhongBanId($maPb){
            $sql = "SELECT * FROM phongban WHERE maPb=".$maPb;
            return $this->viewAll($sql,false);
        }
        function deletePhongBan($maPb){
            $sql = "DELETE FROM `phongban` WHERE maPb=".$maPb;
            return $this->viewAll($sql,false);
        }
    }
?>