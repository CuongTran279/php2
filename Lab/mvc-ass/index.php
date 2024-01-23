<?php
    require_once "controller/class.php";
    require_once "controller/student.php";
    include "view/public/header.php";
    
    $class = new Clas();
    $student = new Student();
    $classModel = new lop();
    $studentModel = new students();

    if(isset($_GET["act"]) && $_GET["act"] != ""){
        $act = $_GET["act"];
        switch($act){
            case "listClass":
                $class->listClass();
            break;
            case  "addClass":
                if(isset($_POST['submit'])){
                    $classModel->add($_POST['name']);
                    header("Location:index.php?act=listClass");
                }
                $class->addClass();
            break;
            case "updtClass":
                if(isset($_GET["id"]) && ($_GET['id'] >0)){
                    $id = $_GET["id"];
                    $ClassId = $classModel->viewClassId($id);
                    if(isset($_POST["submit"])){
                        $class->edit($id,$_POST['name']);
                        header('Location:index.php?act=listClass');
                    }
                }
                include "view/class/updateClass.php";
                $class->updtClass();
            break;
            case "dltClass":
                if(isset($_GET["id"]) && ($_GET['id'] >0)){
                    $id = $_GET["id"];
                    $class->delete($id);
                    header('Location:index.php?act=listClass');
                }
                $class->dltClass();
            break;
            case "listStudent":
                $student->listStudents();
            break;
            case  "addStudent":
                if(isset($_POST['submit'])){
                    $img = $_FILES['img']['name'];
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    } else {
                    }
                    $studentModel->add($_POST['name'],$_POST['age'],$img,$_POST['address'],$_POST['class'],$_POST['majors'],$_POST['email']) ;
                    header("Location:index.php?act=listStudent");
                }
                $student->addStudents();
            break;
            case "updtStudent":
                if(isset($_GET["id"]) && ($_GET['id'] >0)){
                    $id = $_GET["id"];
                    $StudentId = $studentModel->viewStudentId($id);
                    $obj = new Clas();
                    $viewClass = $obj->view();
                    if(isset($_POST["submit"])){
                        $img = $_FILES['img']['name'];
                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        } else {
                        }
                        if($img != ""){
                            $student->edit($id,$_POST['name'],$_POST['age'],$img,$_POST['address'],$_POST['class'],$_POST['majors'],$_POST['email']);
                        }else{
                            $student->edit1($id,$_POST['name'],$_POST['age'],$_POST['address'],$_POST['class'],$_POST['majors'],$_POST['email']);
                        }
                        header('Location:index.php?act=listStudent');
                    }
                }
                include "view/student/updateStudent.php";
                $student->updtStudents();
            break;
            case "dltStudent":
                if(isset($_GET["id"]) && ($_GET['id'] >0)){
                    $id = $_GET["id"];
                    $student->delete($id);
                    header('Location:index.php?act=listStudent');
                }
                $student->dltStudents();
            break;
        }
    }
    include "view/public/footer.php";
?>