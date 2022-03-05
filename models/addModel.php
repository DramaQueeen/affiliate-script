<?php
    require_once ("../core/functions.php");

    class addModel extends functions{
        protected function add_model($data){
            $sql = functions::db()->prepare("INSERT INTO list (coin, name, wallet, time, reward, type, sl, link, date) VALUES (:coin, :name, :wallet, :time, :reward, :type, :sl, :link, :date)");
            $sql->bindParam(":coin", $data['coin']);
            $sql->bindParam(":name", $data['name']);
            $sql->bindParam(":wallet", $data['wallet']);
            $sql->bindParam(":time", $data['time']);
            $sql->bindParam(":reward", $data['reward']);
            $sql->bindParam(":type", $data['type']);
            $sql->bindParam(":sl", $data['sl']);
            $sql->bindParam(":link", $data['link']);
            $sql->bindParam(":date", $data['date']);
            $sql->execute();
            return $sql;
        }
        protected function add_top_model($data){
            $sql = functions::db()->prepare("INSERT INTO top_list (coin, name, wallet, time, reward, type, sl, link, date) VALUES (:coin, :name, :wallet, :time, :reward, :type, :sl, :link, :date)");
            $sql->bindParam(":coin", $data['coin']);
            $sql->bindParam(":name", $data['name']);
            $sql->bindParam(":wallet", $data['wallet']);
            $sql->bindParam(":time", $data['time']);
            $sql->bindParam(":reward", $data['reward']);
            $sql->bindParam(":type", $data['type']);
            $sql->bindParam(":sl", $data['sl']);
            $sql->bindParam(":link", $data['link']);
            $sql->bindParam(":date", $data['date']);
            $sql->execute();
            return $sql;
        }
    }
?>