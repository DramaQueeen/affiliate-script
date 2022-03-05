<?php
    class viewModel{
        protected function get_index_view_model($view){
            if(is_file("./views/index/contents/".$view.".php")){
                $content = "./views/index/contents/".$view.".php";
            }else{
                $content = "404";
            }
            return $content;
        }
        protected function get_admin_view_model($view){

            if(is_file("./views/admin/contents/".$view.".php")){
                $content = "./views/admin/contents/".$view.".php";
            }else{
                $content = "404";
            }
            return $content;
        }
    }
?>