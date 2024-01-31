<?php
    namespace App\controller;
    use App\model\khachHang;
    use eftec\bladeone\BladeOne;

    class khachHangController{
        public $view;
        function __construct(){
            $view = "app/view";
            $cache = "app/cache";
            $this->view = new BladeOne($view, $cache, BladeOne::MODE_AUTO);
        }

        function viewALl(){
            $kh = new khachHang();
            $khachHang1 = $kh->viewAll();
            $stt=1;
            return $this->view->run('list',['khachHang'=>$khachHang1,'i'=>$stt]);
        }
        
        function add(){
            return $this->view->run('add');
        }

        function addKhachHang(){
            if(isset($_POST['submit'])){
                $kh = new khachHang();
                $kh->add($_POST['name'],$_POST['pass'],$_POST['address'],$_POST['email']);
                header ('Location:'.route('list'));
            }
        }

        function edit($id){
            $kh = new khachHang();
            $khang = $kh->viewById($id);
            return $this->view->run('edit',['item'=>$khang]);
        }

        function editKhachHang($id){
            if(isset($_POST['submit'])){
                $kh = new khachHang();
                $kh->edit($id,$_POST['name'],$_POST['pass'],$_POST['address'],$_POST['email']);
                header ('Location:'.route('list'));
            }
        }
        function delete($id){
            $kh = new khachHang();
            $kh->delete($id);
            header ('Location:'.route('list'));
        }
    }
?>