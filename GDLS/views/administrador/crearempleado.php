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
    
    <title>Crear empleado</title>
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
      <br>
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-9 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-normal">Registrar Empleado</h5>
              <form action="?c=Administradores&m=createempleado" class="form-signin" method="POST">
                <div class="row">
                  <div class="col-lg-6 col-sm-12">
                    <div class="form-label-group ">
                      <input type="name" name="nombres" id="nombre" class="form-control" placeholder="nombre" required >
                      <label for="nombre">Nombre</label>
                    </div>
                  </div>
                  <div class="col-lg-6  col-sm-12">
                    <div class="form-label-group">
                      <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="apellidos" required >
                      <label for="apellidos">Apellidos</label>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class=" col-lg-6 mt-3  col-sm-12">
                    <div class="form-label-group">
                      <input type="email" name="correo" id="correo" class="form-control" placeholder="Correo" required >
                      <label for="correo">Correo</label>
                    </div>
                  </div>
                  <div class="col-lg-6  col-sm-12">
                    <div class="form-group ok">
                      <label for="tipo_genero">Genero</label>
                      <select class="form-control" name="Fk_genero" id="tipo_genero">
                        <option value="">Elija una opcion</option>
                        <?php
                        $consultaGenero= parent::consultarGenero();
                        foreach($consultaGenero as $consultaGeneros): ?>
                        <option value="<?php echo $consultaGeneros->id_genero; ?>"><?php echo $consultaGeneros->nombre_genero; ?></option>
                        <?php endforeach; ?>
                        
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6  col-sm-12">
                    <div class="form-group ok">
                      <label for="documento">Documento</label>
                      <select class="form-control" name="Fk_documento" >
                        <option value="">Elija una opcion</option>
                        <?php
                        $consultaDocumento= parent::consultarDocumento();
                        foreach($consultaDocumento as $consultaDocumentos): ?>
                        <option value="<?php echo $consultaDocumentos->id_documento; ?>"><?php echo $consultaDocumentos->nombre_documento; ?></option>
                        <?php endforeach; ?>
                        
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6  col-sm-12">
                    <div class="form-group ok">
                      <label for="Fk_cargo">Cargo</label>
                      <select class="form-control" name="Fk_cargo" >
                        <option value="">Elija una opcion</option>
                        <?php
                        $consultaCargo= parent::consultarCargo();
                        foreach($consultaCargo as $consultaCargos): ?>
                        <option value="<?php echo $consultaCargos->id_cargo; ?>"><?php echo $consultaCargos->nombre_cargo; ?></option>
                        <?php endforeach; ?>
                        
                      </select>
                      
                      
                    </select>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-6 col-sm-12">
                  <div class="form-label-group">
                    <input type="number" name="documento" id="documento_identificacion" class="form-control" placeholder="documento" required >
                    <label for="documento_identificacion">Documento</label>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                  <div class="form-label-group">
                    <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="contraseña" required>
                    <label for="contraseña">Contraseña</label>
                  </div>
                </div>
              </div>
              
              <input type="hidden" value="2" name="Fk_rol">
              
              <div class="custom-control  ok custom-checkbox mb-3 text-center">
                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                <label class="custom-control-label " for="customCheck1">Acepto terminos y Condiciones</label>
              </div>
              
              
              
              <br>
              
              
              <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit"> Registrar Empleado</button>
              
              
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <!--====  End of Content  ====-->
  
  
  <!--============================
  =            Footer            =
  =============================-->
  <?php
  include_once('views/login/layout/footer.php');
  ?>
  
  
  
  <!--====  End of Footer  ====-->
</body>
</html>