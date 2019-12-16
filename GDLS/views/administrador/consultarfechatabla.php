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
      <hr>
      <table class="table  table">
        <thead>
          <tr>
            
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Documento</th>
            <th scope="col">Hora de Entrada</th>
            <th scope="col">Hora de Salida</th>
            <th scope="col">Fecha</th>
            <th scope="col">Correo</th>
          </tr>
        </thead>
        <tbody>
          <?php
      
          foreach(parent::consultarFecha($date) as $j):
          ?>
          <tr>
            <td ><?php echo $j->nombres?></td>
            <td ><?php echo $j->apellidos?></td>
            <td ><?php echo $j->documento ?></td>
            <td ><?php echo $j->hora_entrada ?></td>
            <td ><?php echo $j->hora_salida ?></td>
            <td ><?php echo $j->fecha ?></td>
            <td ><?php echo $j->correo ?></td>
            
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
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