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
                if((empty($_POST['name']))||(empty($_POST['author']))||(empty($_POST['quantity']))||(empty($_POST['price']))){
                    echo '<script>alert("Vui lòng chọn đầy đủ trường dữ liệu")</script>';
                    echo '<script>window.location.href="add"</script>';
                }else{
                    if((!is_numeric($_POST['quantity']))||(!is_numeric($_POST['quantity']))){
                        echo '<script>alert("Giá và số lượng phải là kiểu số")</script>';
                        echo '<script>window.location.href="add"</script>';
                    }else{
                        $this->sach->add($_POST['name'],$_POST['author'],$_POST['quantity'],$_POST['price']);
                        echo '<script>alert("Thêm sản phẩm mới thành công")</script>';
                        echo '<script>window.location.href="list"</script>';
                    }
                }
            }
        }
        public function getById($id){
            $lstSach = $this->sach->getById($id);
            return $this->render('sach.edit',['sach'=>$lstSach]);
        }

        public function editSach($id){
            if(isset($_POST['submit'])){
                if((empty($_POST['name']))||(empty($_POST['author']))||(empty($_POST['quantity']))||(empty($_POST['price']))){
                    echo '<script>alert("Vui lòng chọn đầy đủ trường dữ liệu")</script>';
                    echo '<script>window.location.href="../edit/'.$id.'"</script>';
                }else{
                    if((!is_numeric($_POST['quantity']))||(!is_numeric($_POST['quantity']))){
                        echo '<script>alert("Giá và số lượng phải là kiểu số")</script>';
                        echo '<script>window.location.href="../edit/'.$id.'"</script>';
                    }else{
                        $this->sach->edit($id,$_POST['name'],$_POST['author'],$_POST['quantity'],$_POST['price']);
                        echo '<script>alert("Sửa thành công")</script>';
                        echo '<script>window.location.href="../list"</script>';
                    }
                }
            }
        }

        public function deleteSach($id){
            $this->sach->deleteSach($id);
            echo '<script>alert("Xóa thành công")</script>';
            echo '<script>window.location.href="../list"</script>';
        }
    }
    

?>