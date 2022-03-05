<?php
    require_once ("./core/functions.php");

    class adminListModel extends functions{
        protected function admin_list_model(){
            $sql = functions::query("SELECT * FROM list");
            return $sql;
        }
        protected function admin_top_list_model(){
            $sql = functions::query("SELECT * FROM top_list");
            return $sql;
        }
    }
?>