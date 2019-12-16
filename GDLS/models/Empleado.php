<?php

class Empleado extends DB
{

    public function createLlegada($Fk_usuario, $fecha, $hora_llegada)
    {
        try {
            $stm = parent::conexion()->prepare("INSERT INTO empleados (Fk_usuario,fecha,hora_entrada) VALUES ($Fk_usuario,'$fecha','$hora_llegada')");
            $stm->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function createSalida($Fk_usuario, $fecha, $hora_salida)
    {
        try {
            $stm = parent::conexion()->prepare("UPDATE empleados SET hora_salida = '$hora_salida' WHERE fecha = '$fecha' AND Fk_usuario = $Fk_usuario");
            $stm->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultarPorDocumento($documento)
    {
        try {
            $stm = parent::conexion()->prepare("SELECT * FROM usuarios WHERE documento = $documento");

            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function consultarUsuarios()
    {
        try {
            $stm = parent::conexion()->prepare("SELECT * FROM usuarios");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function consultarEmpleados($Fk_usuario)
    {
        try {
            $stm = parent::conexion()->prepare("SELECT * FROM empleados WHERE Fk_usuario = $Fk_usuario");
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
