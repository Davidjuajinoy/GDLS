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
    
    <title>Home</title>
  </head>
  <body>
    <!--=============================
    =            Nav bar            =
    ==============================-->
    <?php
    include_once('views/login/layout/navbar.php');
    ?>
    
    
    <!--====  End of Nav bar  ====-->

     <?php if (isset($_REQUEST['empleadocreado'])) {?>
              <script>alert("Empleado ingresado Correctamente")</script>


            <?php }?>
    
    

  <!--=============================
  =            Content            =
  ==============================-->

    <!--======================================
    =            Nav bar empleado            =
    =======================================-->

    <?php  include_once('views/login/layout/navbarempleado.php')  ?>
    
    
    <!--====  End of Nav bar empleado  ====-->
    
    <div class="container">
      <hr>
      <table class="table  table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Documento</th>

            <th scope="col">Correo</th>

          </tr>
        </thead>


        <tbody>
          <?php 

            $r = parent::consultarUsuarios();
            $contar=0;

            foreach ($r as $rr ) {
              $i=$contar++;
            
            
           ?>

          <tr>
            <td><?php echo $i;  ?></td>
            <td><?php echo $rr->nombres  ?></td>
            <td><?php echo $rr->apellidos; ?></td>
            <td><?php echo $rr->documento; ?></td>
            <td><?php echo $rr->correo ?></td>
          </tr>

          <?php } ?>
        
        </tbody>
      </table>
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