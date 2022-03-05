<?php
    if($ajax){
        require_once ('../core/db.php');
    }else{
        require_once ('./core/db.php');
    }

    class functions{
        protected function db(){
            try{
                $base = new PDO(SETPDO, USER, PASSWORD);
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $base;
            }catch (Exception $e){
                echo "Error: " . $e->getLine();
            }
        }
        protected function query($query){
            $sql = self::db()->prepare($query);
            $sql->execute();
            return $sql;
        }
        protected function clean_string($string){
            $string = trim($string);
            $string = stripslashes($string);
            $string = htmlentities($string);
            $string = addslashes($string);
            return $string;
        }
        protected function sweet_alert($data){
			if($data['alert'] == "simple"){
				$alert = " 
					<script>
						swal({
							type: '".$data['type']."',
							title: '".$data['title']."',
							text: '".$data['text']."'
						});
					</script>
				";
			}elseif($data['alert'] == "reload") {
				$alert = " 
					<script>
						swal({
							type: '".$data['type']."',
							title: '".$data['title']."',
							text: '".$data['text']."',
							confirmButtonText: 'OK'
							}).then(function(){
									location.reload();
							});
					</script>
				";
			}elseif($data['alert'] == "clean") {
				$alert = " 
					<script>
						swal({
							type: '".$data['type']."',
							title: '".$data['title']."',
							text: '".$data['text']."',
							confirmButtonText: 'OK'
							}).then(function(){
									$('.form')[0].reset();
							});
					</script>
				";
			}
			return $alert;
		}
    }
?>