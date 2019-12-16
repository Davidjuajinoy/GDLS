<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="ie=edge" http-equiv="X-UA-Compatible">
        <link href="assets/libs/bootstrap-4/css/bootstrap.css" rel="stylesheet">
        <link href="assets/libs/css/style.css" rel="stylesheet">
        <script src="assets/libs/js/jquery.js">
        </script>
        <script src="assets/libs/js/poper.js">
        </script>
        <script src="assets/libs/bootstrap-4/js/bootstrap.js">
        </script>
        <script src="assets/libs/js/all.js">
        </script>
        <title>
        Consultar por documento
        </title>

</head>
<body>
<!--=============================
=            Nav bar            =
==============================-->
<?php
include_once 'views/empleado/layout/navbar.php';
?>
<!--====  End of Nav bar  ====-->
<!--=============================
=            Content            =
==============================-->
<div class="container">
    <hr>
    <table class="table table">
        <thead>
            <tr>
                <th scope="col">
                    Nombres
                </th>
                <th scope="col">
                    Apellidos
                </th>
                <th scope="col">
                    Documento
                </th>
                <th scope="col">
                    Hora de Entrada
                </th>
                <th scope="col">
                    Hora de Salida
                </th>
                <th scope="col">
                    Fecha
                </th>
                <th scope="col">
                    Correo
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                $documento               = $_POST['documento'];
                $consultar_documento                = parent::consultarPorDocumento($documento);
                $consultaEmpleados       = parent::consultarUsuarios();
                $consultar_Empleado = parent::consultarEmpleados($consultar_documento->id_usuarios);
                foreach ($consultar_Empleado  as $j): ?>
            <tr>
                <td>
                    <?php  echo $consultar_documento->nombres ?>
                </td>
                <td>
                    <?php  echo $consultar_documento->apellidos ?>
                </td>
                <td>
                    <?php echo $consultar_documento->documento ?>
                </td>
                <td>
                    <?php echo $j->
                    hora_entrada ?>
                </td>
                <td>
                    <?php echo $j->
                    hora_salida ?>
                </td>
                <td>
                    <?php echo $j->
                    fecha ?>
                </td>
                <td>
                    <?php echo $consultar_documento->
                    correo ?>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
    </hr>
</div>
<br>
<br>
<br>
<!--============================
=            Footer            =
=============================-->
<?php
include_once 'views/login/layout/footer.php';
?>
<!--====  End of Footer  ====-->
</body>
</html>