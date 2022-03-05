<?php
    require_once ("../models/addModel.php");

    class addController extends addModel{
        public function add_controller(){
            $coin = functions::clean_string($_POST['coin']);
            $name = functions::clean_string($_POST['name']);
            $wallet = functions::clean_string($_POST['wallet']);
            $time = functions::clean_string($_POST['time']);
            $reward = functions::clean_string($_POST['reward']);
            $type = functions::clean_string($_POST['type']);
            $sl = functions::clean_string($_POST['shortlink']);
            $link = functions::clean_string($_POST['link']);
            $date = date("Y-m-d H:i:s");

            $data = [
                "coin" => $coin,
                "name" => $name,
                "wallet" => $wallet,
                "time" => $time,
                "reward" => $reward,
                "type" => $type,
                "sl" => $sl,
                "link" => $link,
                "date" => $date
            ];

            $save_data = addModel::add_model($data);

            if($save_data->rowCount() >= 1){
                $alert = [
                    "alert"=>"clean",
                    "type"=>"success",
                    "title"=>"Yeah!",
                    "text"=>"Site Added"
                ];
            }else{
                $alert = [
                    "alert"=>"simple",
                    "type"=>"error",
                    "title"=>"Oops!",
                    "text"=>"Something is wrong :("
                ];
            }
            return functions::sweet_alert($alert);
        }
        public function add_top_controller(){
            $coin = functions::clean_string($_POST['coin']);
            $name = functions::clean_string($_POST['name']);
            $wallet = functions::clean_string($_POST['wallet']);
            $time = functions::clean_string($_POST['time']);
            $reward = functions::clean_string($_POST['reward']);
            $type = functions::clean_string($_POST['type']);
            $sl = functions::clean_string($_POST['shortlink']);
            $link = functions::clean_string($_POST['link']);
            $date = date("Y-m-d H:i:s");

            $data = [
                "coin" => $coin,
                "name" => $name,
                "wallet" => $wallet,
                "time" => $time,
                "reward" => $reward,
                "type" => $type,
                "sl" => $sl,
                "link" => $link,
                "date" => $date
            ];

            $save_data = addModel::add_top_model($data);

            if($save_data->rowCount() >= 1){
                $alert = [
                    "alert"=>"clean",
                    "type"=>"success",
                    "title"=>"Yeah!",
                    "text"=>"Site Added"
                ];
            }else{
                $alert = [
                    "alert"=>"simple",
                    "type"=>"error",
                    "title"=>"Oops!",
                    "text"=>"Something is wrong :("
                ];
            }
            return functions::sweet_alert($alert);
        }
    }
?>