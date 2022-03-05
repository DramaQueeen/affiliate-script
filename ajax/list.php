<?php 
    $ajax = true;
    require_once ("../core/config.php");
    if(isset($_POST["wallet"]) && isset($_POST["coin"]) && isset($_POST["type"])){
		require_once ("../controllers/listController.php");
		$list = new listController();
		echo $list->list_controller();
	}else{
		echo '<script> window.location.href="' . URL . '"</script>';
	}
?>