<?php
	$ajax = true;
	require_once ("../core/config.php");
	if(isset($_POST["username"]) && isset($_POST["password"])){
		require_once ("../controllers/signinController.php");
		$signin = new signinController();
		echo $signin->signin_controller();
	}else{
		session_start();
		session_destroy();
		echo '<script> window.location.href="' . URL . '"</script>';
	}
?>