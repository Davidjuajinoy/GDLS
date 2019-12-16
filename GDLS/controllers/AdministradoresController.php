<?php

class AdministradoresController extends Administrador
{
    private $Seguridad;


     public function __construct(){
            try{
                $this->Seguridad = new SeguridadLogin();
                $this->Seguridad->seguridad();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }


    public function register()
    {
        require_once 'views/administrador/register.php';
    }

    public function create()
    {

        $Fk_rol       = $_POST['Fk_rol'];
        $nombres      = $_POST['nombres'];
        $apellidos    = $_POST['apellidos'];
        $correo       = $_POST['correo'];
        $Fk_genero    = $_POST['Fk_genero'];
        $Fk_documento = $_POST['Fk_documento'];
        $Fk_cargo     = $_POST['Fk_cargo'];
        $documento    = $_POST['documento'];
        $contraseña  = $_POST['contraseña'];
        parent::store($Fk_rol, $nombres, $apellidos, $correo, $Fk_genero, $Fk_documento, $Fk_cargo, $documento, $contraseña);
        header("location:?c=Administradores&m=index");
    }
    public function home()
    {
        require_once ('views/administrador/home.php');
    }

    public function crearempleado()
    {
        require_once ('views/administrador/crearempleado.php');
    }

    public function createempleado()
    {

        $Fk_rol       = $_POST['Fk_rol'];
        $nombres      = $_POST['nombres'];
        $apellidos    = $_POST['apellidos'];
        $correo       = $_POST['correo'];
        $Fk_genero    = $_POST['Fk_genero'];
        $Fk_documento = $_POST['Fk_documento'];
        $Fk_cargo     = $_POST['Fk_cargo'];
        $documento    = $_POST['documento'];
        $contraseña  = $_POST['contraseña'];
        parent::store($Fk_rol, $nombres, $apellidos, $correo, $Fk_genero, $Fk_documento, $Fk_cargo, $documento, $contraseña);
         header("location:?c=Administradores&m=home&empleadocreado=correctamente");
    }

    public function consultarvistaDocumento()
    {
        require_once 'views/administrador/consultarpordocumento.php';
    }

    public function consultar_empleado()
    {
        $documento  = $_POST['documento'];
    
         $contar = parent::consultarNumerodeEmpleados($documento);

             $consultarmedianteDocumento = parent::consultarPorDocumento($documento);

        if ($contar->documento > 0) {

                $consultarmedianteDocumentoDos = parent::consultarPorDocumentoDos($documento);
              $consultar_empleado_y_obtenerid = parent::consultarEmpleados($consultarmedianteDocumento->id_usuarios);
           require_once ('views/administrador/consultarpordocumentotabla.php');

     
      
        }else {
            header('location:?c=Administradores&m=consultarvistaDocumento');
        }
        
      
      
    }

    public function consultar_empleado_fecha()
    {
        $date = $_POST['date'];
        require_once ('views/administrador/consultarfechatabla.php');
    }




}
