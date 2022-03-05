<?php
    require_once ("./models/adminListModel.php");

    class adminListController extends adminListModel{
        public function admin_list_controller(){
            $get = adminListModel::admin_list_model();
            if($get->rowCount() >= 1){
                $row = $get->fetchAll(PDO::FETCH_ASSOC);
                include ("./views/admin/contents/list.php");                
            }else{
                $alert = [
                    "alert"=>"simple",
                    "type"=>"error",
                    "title"=>"Oops!",
                    "text"=>"Refresh the page"
                ];
                return functions::sweet_alert($alert);
            }
        }
        public function admin_top_list_controller(){
            $get = adminListModel::admin_top_list_model();
            if($get->rowCount() >= 1){
                $row = $get->fetchAll(PDO::FETCH_ASSOC);
                include ("./views/admin/contents/toplist.php");                
            }else{
                $alert = [
                    "alert"=>"simple",
                    "type"=>"error",
                    "title"=>"Oops!",
                    "text"=>"Refresh the page"
                ];
                return functions::sweet_alert($alert);
            }
        }
    }
?>