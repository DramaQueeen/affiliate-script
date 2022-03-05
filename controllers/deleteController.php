<?php
    require_once ("./models/deleteModel.php");

    class deleteController extends deleteModel{
        public function delete_controller(){
            $id = $_GET['id'];

            $data = deleteModel::delete_model($id);

            if($data->rowCount() >= 1){
                echo '<script> window.location.href="' . URL . '"</script>';
            }else{
                "Error";
            }
        }
        public function delete_top_controller(){
            $id = $_GET['id'];

            $data = deleteModel::delete_top_model($id);

            if($data->rowCount() >= 1){
                echo '<script> window.location.href="' . URL . '"</script>';
            }else{
                "Error";
            }
        }
    }
?>