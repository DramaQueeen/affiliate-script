<?php
    require_once ("./core/functions.php");

    class deleteModel extends functions{
        protected function delete_model($data){
            $sql = functions::db()->prepare("DELETE FROM list WHERE id = :id");
            $sql->bindParam(":id", $data);
            $sql->execute();
            return $sql;
        }
        protected function delete_top_model($data){
            $sql = functions::db()->prepare("DELETE FROM top_list WHERE id = :id");
            $sql->bindParam(":id", $data);
            $sql->execute();
            return $sql;
        }
    }
?>