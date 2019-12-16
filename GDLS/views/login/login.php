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
    <title>Login</title>
  </head>
  <body>
    <!--=============================
    =            Nav bar            =
    ==============================-->
    <?php
    include_once('views/login/layout/navbar.php');
    ?>
    
    
    <!--====  End of Nav bar  ====-->
    
    <div class="container">
      <br>
      
      
      
      <div class="row">
        
        <div class="col-sm-8 col-md-8 col-lg-4 mx-auto ">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-normal">Iniciar Sesión</h5>
              <form class="form-signin" method="POST" action="?c=Login&m=auth" >
                <div class="form-label-group">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Correo" required>
                  <label for="email">Correo</label>
                </div>
                <div class="form-label-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="contraseña" required>
                  <label for="password">Contraseña</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label " for="customCheck1">Recordarme</label>
                </div>
                <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" >Ingresar</button>
                <hr class="my-3">
                
                <a class="btn btn-lg btn-info btn-block text-uppercase text-white" href="?c=Administradores&m=register">Registrar Admin</a>
                
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