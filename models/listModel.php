<?php
    if($ajax){
        require_once ("../core/functions.php");
    }else{
        require_once ("./core/functions.php");
    }
    class listModel extends functions{
        protected function list_model($data){
            $sql = functions::db()->prepare("SELECT * FROM list WHERE wallet = :wallet AND coin = :coin AND type = :type");
            $sql->bindParam(":wallet", $data['wallet']);
            $sql->bindParam(":coin", $data['coin']);
            $sql->bindParam(":type", $data['type']);
            $sql->execute();
            return $sql;
        }
        protected function list_top_model(){
            $sql = functions::query("SELECT * FROM top_list");
            return $sql;
        }
    }
?>