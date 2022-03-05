<?php

	require_once("./core/functions.php");

	class statsController extends functions{
		public function stats_controller(){
			$stats = functions::query("SELECT * FROM list");
			$get_stats = $stats->rowCount();
			return $get_stats;
		}
	}
?>