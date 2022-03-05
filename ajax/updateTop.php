<?php
    $ajax = true;
	require_once ("../core/config.php");
	if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["link"])){
		require_once ("../controllers/updateController.php");
		$update = new updateController();
		echo $update->update_top_controller();
	}else{
		echo '<script> window.location.href="' . URL . '"</script>';
	}
?>