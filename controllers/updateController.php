<?php
    require_once ("../models/updateModel.php");

    class updateController extends updateModel{
        public function update_controller(){
            $id = functions::clean_string($_POST['id']);
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
                "id" => $id,
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

            $save_data = updateModel::update_model($data);

            if($save_data->rowCount() >= 1){
                $alert = [
                    "alert"=>"clean",
                    "type"=>"success",
                    "title"=>"Updated information!",
                    "text"=>"The information has been saved"
                ];
            }else{
                $alert = [
                    "alert"=>"simple",
                    "type"=>"error",
                    "title"=>"Oops!",
                    "text"=>"Something is wrong :(",
                ];
            }

            return functions::sweet_alert($alert);
        }
        public function update_top_controller(){
            $id = functions::clean_string($_POST['id']);
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
                "id" => $id,
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

            $save_data = updateModel::update_top_model($data);

            if($save_data->rowCount() >= 1){
                $alert = [
                    "alert"=>"clean",
                    "type"=>"success",
                    "title"=>"Updated information!",
                    "text"=>"The information has been saved"
                ];
            }else{
                $alert = [
                    "alert"=>"simple",
                    "type"=>"error",
                    "title"=>"Oops!",
                    "text"=>"Something is wrong :(",
                ];
            }

            return functions::sweet_alert($alert);
        }
    }
?>