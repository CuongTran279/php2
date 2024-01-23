<?php
    abstract class Model{
        public $name;

        public function getData(){
            echo "get data";
        }

        abstract public function add();
        abstract public function delete();
        abstract public function update();
    }
?>