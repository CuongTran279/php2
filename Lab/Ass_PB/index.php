<?php
    require_once "controller/pbController.php";
    $pbCtl = new pbController();
    $pbMd = new phongBanModel();
    if(isset($_GET['act']) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch ($act) {
            case 'list':
                $pbCtl->view();
            break;
            case 'add':
                if(isset($_POST['submit'])){
                    $pbMd->addPhongBan($_POST['name'],$_POST['diaChi'],$_POST['email']);
                    header ("Location:index.php?act=list");
                }
                $pbCtl->add();
            break;
            case "edit":
                if(isset($_GET['maPb'])&&($_GET['maPb']>0)){
                    $maPb = $_GET['maPb'];
                    $viewId = $pbMd->viewPhongBanId($maPb);
                    if(isset($_POST['submit'])){
                        $pbMd->editPhongBan($maPb,$_POST['name'],$_POST['diaChi'],$_POST['email']);
                        header ("Location:index.php?act=list");
                    }
                }
                include "view/edit.php";
                $pbCtl->edit();
            break;
            case "delete":
                if(isset($_GET['maPb'])){
                    $maPb = $_GET['maPb'];
                    $pbMd->deletePhongBan($maPb);
                    header ("Location:index.php?act=list");
                }
                $pbCtl->view();
                $pbCtl->delete();
            break;
        }
    }else{
        $pbCtl->view();
    }
?>