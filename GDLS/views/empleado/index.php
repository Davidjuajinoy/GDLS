<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/libs/bootstrap-4/css/bootstrap.css">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <script src="assets/libs/js/jquery.js"></script>
    <script src="assets/libs/js/poper.js"></script>
    <script src="assets/libs/bootstrap-4/js/bootstrap.js"></script>
    <script src="assets/libs/js/all.js"></script>
    <title>Sena</title>
  </head>
  <body>
  <!--=============================
    =            Nav bar            =
    ==============================-->
    <?php
include_once 'views/empleado/layout/navbar.php';
?>


    <!--====  End of Nav bar  ====-->
             <?php if (isset($_REQUEST['hora_llegada'])) {?>
              <script>alert("Hora de llegada ingresada Correctamente")</script>


            <?php }?>

                <?php if (isset($_REQUEST['hora_salida'])) {?>
              <script>alert("Hora de Salida ingresada Correctamente")</script>


            <?php }?>



            








 <div class="container">





      <div class="row">
        <!-- Llegada -->
        <div class="col-sm-6 col-md-6 col-lg-4 mx-auto mt-1">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-normal">Ingresa Hora de Llegada</h5>
              <form action="?c=Empleados&m=createHoraLlegada" method="POST" class="form-signin">
<br>

                <div class="form-label-group">
                  <input type="number"name="documento" id="documento" class="form-control" placeholder="documento" required >
                  <label for="documento">Documento</label>
                </div>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit" > Generar reporte</button>
                <hr class="my-3">
              </form>
            </div>
          </div>
        </div>

        <!-- Salida -->

        <div class="col-sm-6 col-md-6 col-lg-4 mx-auto mt-1">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-normal">Ingresa Hora de Salida</h5>
              <form action="?c=Empleados&m=createHoraSalida" method="POST" class="form-signin">
<br>

                <div class="form-label-group">
                  <input type="number"name="documento" id="fecha" class="form-control" placeholder="#" required >
                  <label for="fecha">Documento</label>
                </div>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit"> Generar reporte</button>
                <hr class="my-3">
              </form>
            </div>
          </div>
        </div>
              <!-- Consultar -->

        <div class="col-sm-6 col-md-6 col-lg-4 mx-auto ">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-normal">Consultar Llegadas y Salidas</h5>
              <form action="?c=Empleados&m=consultar" method="POST" class="form-signin">


                <div class="form-label-group">
                  <input type="number"name="documento" id="consulta" class="form-control" placeholder="#" required >
                  <label for="consulta">Documento</label>
                </div>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit"> Generar reporte</button>
                <hr class="my-3">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   <!--============================
    =            Footer            =
    =============================-->
    <?php
include_once 'views/login/layout/footer.php';
?>



    <!--====  End of Footer  ====-->

  </body>
</html>