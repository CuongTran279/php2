<?php
    require_once "model/student.php";

    class Student extends students{
        public function listStudents(){
            $obj = new Clas();
            $viewClass = $obj->view();
            $viewStudent = $this->views();
            require_once "view/student/listStudent.php";
        }
        public function addStudents(){
            $obj = new Clas();
            $viewClass = $obj->view();
            require_once "view/student/addStudent.php";
        }
        public function updtStudents(){
            $obj = new Clas();
            $viewClass = $obj->view();
            require_once "view/student/updateStudent.php";
        }
        public function dltStudents(){
            $obj = new Clas();
            $viewClass = $obj->view();
            $viewStudent = $this->views();
            require_once "view/student/listStudent.php";
        }
    }
?>