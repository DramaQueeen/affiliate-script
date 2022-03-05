<?php
	require_once ("../models/signinModel.php");

	class signinController extends signinModel{
		public function signin_controller(){
			$username = functions::clean_string($_POST['username']);
			$password = functions::clean_string($_POST['password']);

			$data = [
				"username" => $username,
				"password" => $password
			];

			$signin_data = signinModel::signin_model($data);

			$query = functions::query("SELECT * FROM list");
			$total = $query->rowCount();

			if($signin_data){
                session_start();
                $_SESSION['admin'] = $username;
                $_SESSION['total_sites'] = $total;
                echo '<script> window.location.href="' . URL . '"</script>';
			}else{
				$alert = [
                    "alert"=>"simple",
                    "type"=>"error",
                    "title"=>"Oops!",
                    "text"=>"Username or password incorrect"
                ];
                return functions::sweet_alert($alert);
			}
		}
	}
?>