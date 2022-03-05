<?php
    if($ajax){
        require_once ("../models/listModel.php");
    }else{
        require_once ("./models/listModel.php");
    }

    class listController extends listModel{
        public function list_controller(){
            $wallet = $_POST['wallet'];
            $coin = $_POST['coin'];
            $type = $_POST['type'];

            $data = [
                "wallet" => $wallet,
                "coin" => $coin,
                "type" => $type,
            ];
            $get_data = listModel::list_model($data);

            if($get_data->rowCount() >= 1){
                $row = $get_data->fetchAll(PDO::FETCH_ASSOC);
                include ("../views/index/contents/list.php");
            }else{
                $alert = [
                    "alert"=>"simple",
                    "type"=>"error",
                    "title"=>"Oops!",
                    "text"=>"No data in our database"
                ];
                return functions::sweet_alert($alert);
            }
        }
        public function list_top_controller(){
            $get = listModel::list_top_model();
            if($get->rowCount() >= 1){
                $row = $get->fetchAll(PDO::FETCH_ASSOC);
                include ("./views/index/contents/toplist.php");                
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