<?php
class EmpleadosController extends Empleado
{
    private $Administrador;

    public function index()
    {
        require_once('views/empleado/index.php');
    }
    public function __construct()
    {
        try {
            $this->Administrador = new Administrador();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function createHorallegada()
    {
        date_default_timezone_set('America/Bogota');
        $fecha        = date("Y-m-d ");
        $hora_llegada = date("H:i:s");

        $documento  = $_POST['documento'];
        $sihaydocumentoono = parent::consultarNumerodeEmpleados($documento);
         if($sihaydocumentoono->documento > 0){
                $consultar_documento = parent::consultarPorDocumento($documento);
                @$consultar_empleados = parent::consultarEmpleados($consultar_documento->id_usuarios);

                if($consultar_documento->documento == $documento){
                    if($fecha == $consultar_empleados->fecha && $documento == $consultar_documento->documento){
                        header('location:?c=Empleados&m=index');
                    }else{
                    parent::createLlegada($consultar_documento->id_usuarios, $fecha, $hora_llegada);
                    header('location:?c=Empleados&m=index&hora_llegada=creado._:');
                    }
   
                }

            }else{
                header('location:?c=Empleados&m=index');
        
            }


       }

         
 

    public function createHoraSalida()
    {
        date_default_timezone_set('America/Bogota');
        $fecha               = date("Y-m-d ");
        $hora_salida         = date("H:i:s");
        $documento           = $_POST['documento'];
    
        $sihaydocumentoono = parent::consultarNumerodeEmpleados($documento);
        if ($sihaydocumentoono->documento > 0) {
              $consultar_documento = parent::consultarPorDocumento($documento);
                @$consultar_empleados = parent::consultarEmpleados($consultar_documento->id_usuarios);
                if ($fecha == $consultar_empleados->fecha && $documento == $consultar_documento->documento) {
                    header('location:?c=Empleados&m=index');
                } else {
                     parent::createSalida($consultar_documento->id_usuarios, $fecha, $hora_salida);
                     header("location:?c=Empleados&m=index&hora_salida=registrada");

                }
        }else {
             header('location:?c=Empleados&m=index');
        }
       

    }

  

    public function consultar()
    {

        $documento = $_POST['documento'];
        $count  = parent::consultarNumerodeEmpleados($documento);

        if ($count->documento > 0) {
            require_once('views/empleado/consultar_empleado.php');
        } else {
           header('location:?c=Empleados&m=index');
        }
    }

}
