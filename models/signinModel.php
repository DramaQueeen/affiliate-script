<?php
	require_once ("../core/functions.php");

	class signinModel extends functions{
		protected function signin_model($data){
      		if($data['username'] == USERNAME && $data['password'] == PASSWORD){
                return true;
            }else{
                return false;
            }
    	}
	}
?>