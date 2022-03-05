<?php
    require_once ("./models/viewModel.php");

    class viewController extends viewModel{
        public function get_index_template(){
            return require_once ("./views/index/index.php");
        }
        public function get_index_view_controller(){
            if(isset($_GET['i'])){
                $rute = explode("/", $_GET['i']);
                $a = viewModel::get_index_view_model($rute[0]);
            }else{
                $a = "index";
            }
            return $a;
        }
        public function get_admin_template(){
            return require_once ("./views/admin/index.php");
        }
        public function get_admin_view_controller(){
            if(isset($_GET['i'])){
                $rute = explode("/", $_GET['i']);
                $a = viewModel::get_admin_view_model($rute[0]);
            }else{
                $a = "index";
            }
            return $a;
        }
    }
?>