<?php 
    // include_once 'app/models/SachModel.php';
    // include_once 'app/controllers/BaseController.php';
    namespace App\controllers;
    use App\models\SachModel;
    class SachController extends BaseController{
        protected $sach;
        public function __construct(){
            $this->sach = new SachModel;
        }
        public function getSach() {
            $lstSach = $this->sach->getAllSach();
            return $this->render('sach.index',['lstSach'=>$lstSach]);
        }
        public function add(){
            return $this->render('sach.add');
        }
        public function addSach(){
            if(isset($_POST['submit'])){
                if(empty($_POST['name'])||empty($_POST['author'])||empty($_POST['price'])||empty($_POST['quantity'])){
                    echo '<script>alert("Vui long nhap day du du lieu")</script>';
                    echo '<script>window.location.href="add"</script>';
                }else{
                    if(!is_numeric($_POST['price'])||!is_numeric($_POST['quantity'])){
                        echo '<script>alert("So luong va gia phai la kieu so")</script>';
                        echo '<script>window.location.href="add"</script>';
                    }else{
                        $this->sach->addSach($_POST['name'],$_POST['author'],$_POST['quantity'],$_POST['price']);
                        echo '<script>alert("Add thanh cong")</script>';
                        echo '<script>window.location.href="list"</script>';
                    }
                }

            }
        }
        public function editSach($id){
            if(isset($_POST['submit'])){
                if(empty($_POST['name'])||empty($_POST['author'])||empty($_POST['quantity'])||empty($_POST['price'])){
                    echo '<script>alert("Vui long nhap day du du lieu")</script>';
                    echo '<script>window.location.href="add"</script>';
                }else{
                    if(!is_numeric($_POST['price'])||!is_numeric($_POST['quantity'])){
                        echo '<script>alert("So luong va gia phai la kieu so")</script>';
                        echo '<script>window.location.href="add"</script>';
                    }else{
                        $this->sach->editSach($id,$_POST['name'],$_POST['author'],$_POST['quantity'],$_POST['price']);
                        echo '<script>alert("Sua thanh cong")</script>';
                        echo '<script>window.location.href="../list"</script>';
                    }
                }

            }
        }
        public function getIdSach($id){
            $sach = $this->sach->getIdSach($id);
            return $this->render('sach.edit',['sach'=>$sach]);
        }
        public function deleteSach($id){
            $this->sach->deleteSach($id);
            echo '<script>alert("Xoa thanh cong")</script>';
            echo '<script>window.location.href="../list"</script>';
        }
    }
    

?>
