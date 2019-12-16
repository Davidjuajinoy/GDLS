<!DOCTYPE html>
<html lang="en">
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
    
    <title>Consultar por documento</title>
  </head>
  <body>
       <!--=============================
    =            Nav bar            =
    ==============================-->
    <?php
    include_once('views/login/layout/navbar.php');
    ?>
    
    
    <!--====  End of Nav bar  ====-->
    <!--=============================
    =            Content            =
    ==============================-->

    <!--======================================
    =            Nav bar empleado            =
    =======================================-->

    <?php  include_once('views/login/layout/navbarempleado.php');  ?>
    
    
    <!--====  End of Nav bar empleado  ====-->
    
 
    <div class="container">
      <div class="row">
        <!-- Documento -->
        <div class="col-sm-6 col-md-6 col-lg-4 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-normal">Reporte por empleado</h5>
              <form action="?c=Administradores&m=consultar_empleado" method="POST" class="form-signin">
                
               
                <div class="form-label-group">
                  <input type="number"name="documento" id="documento" class="form-control" placeholder="documento" required >
                  <label for="documento">Documento</label>
                </div>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit"> Generar reporte</button>
                <hr class="my-3">
              </form>
            </div>
          </div>
        </div>

        <!-- Fecha -->

        <div class="col-sm-6 col-md-6 col-lg-4 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-normal">Reporte por Fecha</h5>
              <form action="?c=Administradores&m=consultar_empleado_fecha" method="POST" class="form-signin">
                
               
                <div class="form-label-group">
                  <input type="date"name="date" id="fecha" class="form-control" placeholder="fecha" required >
                  <label for="fecha">Fecha</label>
                </div>
                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit"> Generar reporte</button>
                <hr class="my-3">
              </form>
            </div>
          </div>
        </div>
        
<!--Horas  -->

        <div class="col-sm-6 col-md-6 col-lg-4 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-normal">Reporte de Horas</h5>
              <form action="?c=Administradores&m=consultardocumento" method="" class="form-signin">
                
               
                <div class="form-label-group">
                  <input type="number"name="" id="horas" class="form-control" placeholder="horas" required  disabled>
                  <label for="horas">Documento</label>
                </div>
                <button class="btn btn-lg btn-info btn-block text-uppercase" disabled>En Construcción</button>
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
  include_once('views/login/layout/footer.php');
  ?>
  
  
  
  <!--====  End of Footer  ====-->
  </body>
</html>