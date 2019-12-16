<?php 


class Administrador extends DB
{
	public function VerificacionLogin($email,$password){
		try{
			$stm=parent::conexion()->prepare("SELECT * FROM usuarios WHERE correo = ? AND contraseña = ? ");
			$stm->bindParam(1,$email,PDO::PARAM_STR);
            $stm->bindParam(2,$password,PDO::PARAM_STR);

			$stm->execute();
			return $stm->fetch(PDO::FETCH_OBJ);

		}catch(Exception $e){
			die($e->getMessage());

		}
	}

 


	public function store($Fk_rol,$nombres,$apellidos,$correo ,$Fk_genero,$Fk_documento,$Fk_cargo,$documento,$contraseña){
        try{
            $stm = parent::conexion()->prepare("INSERT INTO usuarios (Fk_rol ,nombres, apellidos,correo, Fk_genero, Fk_documento, Fk_cargo, documento, contraseña) VALUES ($Fk_rol,'$nombres','$apellidos','$correo',$Fk_genero,$Fk_documento,$Fk_cargo,$documento,'$contraseña')");
            $stm->execute();
           
        }catch(Exception $e){
            die($e->getMessage());
        }
    }



    public function consultarGenero(){
    	try{
    		$stm = parent::conexion()->prepare("SELECT * FROM genero ");
    		$stm->execute();
    		return $stm->fetchAll(PDO::FETCH_OBJ);

    	}catch(Exception $e){
    		die($e->getMessage());
    	}
    }

    public function consultarDocumento(){
            try{
                $stm = parent::conexion()->prepare("SELECT * FROM tipo_documento");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }



     public function consultarCargo(){
        try{
            $stm = parent::conexion()->prepare("SELECT * FROM cargo");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

     public function consultarRol(){
        try{
            $stm = parent::conexion()->prepare("SELECT * FROM roles");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }


    public function consultarUsuarios(){
        try {
            $stm = parent::conexion()->prepare("SELECT * FROM usuarios");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }




        public function consultarPorDocumento($documento){
            try{
                $stm = parent::conexion()->prepare("SELECT * FROM usuarios WHERE documento = $documento");

                $stm->execute();
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultarPorDocumentoDos($documento){
            try{
                $stm = parent::conexion()->prepare("SELECT * FROM usuarios WHERE documento = $documento");
            
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function consultarEmpleados($Fk_usuario){
            try{
                $stm = parent::conexion()->prepare("SELECT * FROM empleados WHERE Fk_usuario = $Fk_usuario");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die($e->getMessage());
            }
        }







        public function consultarFecha($date)
        {
            try {
                $stm = parent::conexion()->prepare("SELECT * FROM empleados INNER JOIN usuarios WHERE empleados.Fk_usuario = usuarios.id_usuarios AND fecha = '$date' ");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }



            public function consultarNumerodeEmpleados($documento)
    {
        try {
            $stm = parent::conexion()->prepare("SELECT COUNT(*) documento FROM usuarios WHERE documento = $documento");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }




        }





?>
