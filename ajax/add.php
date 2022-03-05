<?php
	$ajax = true;
	require_once ("../core/config.php");
	if(isset($_POST["coin"]) && isset($_POST["name"]) && isset($_POST["link"])){
		require_once ("../controllers/addController.php");
		$add = new addController();
		echo $add->add_controller();
	}else{
		echo '<script> window.location.href="' . URL . '"</script>';
	}
?>