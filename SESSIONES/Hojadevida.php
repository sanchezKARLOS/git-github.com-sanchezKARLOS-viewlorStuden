<?php

include "basedatos.php";

$Id_Persona=$_SESSION['Id_Persona'];
$sql = "SELECT * FROM personas where Id_Persona = $Id_Persona";
$resultado = mysqli_query($mysqli, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/hojadevida.css">

</head>
<body>
  
<?php
while ($mostrar=mysqli_fetch_array($resultado)){
?>
<div class="mi-titulo">
          <h1><spam><?php echo $mostrar['P_Nombre']?> </spam> <spam><?php echo $mostrar['S_Nombre'] ?></spam>  <spam><?php echo $mostrar['P_Apellido'] ?></spam> <spam><?php echo $mostrar['S_Apellido'] ?></spam></h1>
  
        </div>
        
        <div class="datos-personales">
          <p><spam>Su Id</spam> <?php echo $mostrar['Id_Persona']?> </p>
          <?php
    }
    ?>
        
          <!--<p><spam>Grado </spam><?php ?></p>-->
        </div>

      <section class="clearfix">
        <div class="panel-izquierdo">
          <h2>Datos Familiares</h2>
          
          <div class="periodo">
            <p></p>              
          </div>

          <div class="empresa">
            <p><spam></spam></p>
            <p></p>
            <p></p>
          </div>
          
        </div>
        
        <div class="panel-derecho">
          <h2>Objetivos</h2>
        </div>
        
      </section>  

      <footer>
      </footer>
      
    </div> <!
    - FIN contenedor -->
    
</body>
</html>