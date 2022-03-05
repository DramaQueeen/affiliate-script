<?php
    session_start();
    require_once ("./core/config.php");
    require_once ("./controllers/viewController.php");
    if(isset($_SESSION['admin'])){
        $template = new viewController();
        $template->get_admin_template();
    }else{
        $template = new viewController();
        $template->get_index_template();
    }
?>