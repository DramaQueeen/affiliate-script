<?php 
    require_once ("./controllers/deleteController.php");

    if(!isset($_GET['id'])){
        header("Location:".URL);
    }else{
        $delete = new deleteController();
        $delete->delete_controller();
    }
?>