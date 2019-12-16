<?php 

class DB{

	public function conexion(){
		try{
			$pdo= new PDO('mysql:host=localhost;dbname=sena;charset=utf8','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $pdo;


		}catch(Exception $e){
			die($e->getMessage());

		}
	}




}


?>
