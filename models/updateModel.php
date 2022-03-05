<?php
    require_once ("../core/functions.php");

    class updateModel extends functions{
        protected function update_model($data){
            $sql = functions::db()->prepare("UPDATE list SET coin = :coin, name = :name, wallet = :wallet, time = :time, reward = :reward, type = :type, sl = :sl, link = :link, date = :date WHERE id = :id");
            $sql->bindParam(":id", $data['id']);
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
        protected function update_top_model($data){
            $sql = functions::db()->prepare("UPDATE top_list SET coin = :coin, name = :name, wallet = :wallet, time = :time, reward = :reward, type = :type, sl = :sl, link = :link, date = :date WHERE id = :id");
            $sql->bindParam(":id", $data['id']);
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