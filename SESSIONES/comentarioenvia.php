<?php
require "basedatos.php";


if(isset($_POST['enviar'])){
    
    $Id_Estudiante = $_POST['Id_Estudiante'];
    //$Id_Persona = $_POST['Id_Persona'];
echo "$Id_Estudiante";

    $Comentario = $_POST['Comentario'];
    echo "$Comentario";
    date_default_timezone_set('America/Bogota');
    $Fecha_Comentario=date("Y-m-d H:i:s");


$sql =("UPDATE comentario set  Comentario='$Comentario', Fecha_Comentario = '$Fecha_Comentario' 
WHERE  Id_Estudiante= '$Id_Estudiante' ");
$resultado = mysqli_query($mysqli,$sql);

    if($resultado){

        echo "Comentario envio con exito";
     return header("location: DocenteNotasEstudiante.php");
    }
    else{
        echo "error";
        
    }
    
}
else{

    echo "error al cargar";
   
}
mysqli_close($mysqli);

?>