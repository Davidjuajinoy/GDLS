<?php 

class LoginController{ 

	private $usuario;

	public function index(){
		require_once('views/login/login.php');
	}

	public function __construct(){
		try {

			$this->usuario = new Administrador();
			
		} catch (Exception $e) {
			
		}

	}

	public function auth(){
		$email= $_POST['email'];
		$password= $_POST['password'];
		$usuario= $this->usuario->VerificacionLogin($email,$password);

		if ($email == $usuario->correo && $password == $usuario->contraseña) {
			$_SESSION['ADMIN']= $usuario;
			header('location:?c=Administradores&m=home');
			
			
		} else {
			header('location:?c=Login&m=index');
		}
	}

	public function destroy(){
        session_destroy();
        header('location:?c=Login&m=index');
        exit;

    }





   
}



?>