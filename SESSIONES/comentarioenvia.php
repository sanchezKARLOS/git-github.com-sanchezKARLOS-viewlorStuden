<?php
require "basedatos.php";


if(isset($_POST['enviar'])){

    $Id_IdPersona = $_POST['Id_IdPersona'];
    $Id_Persona = $_POST['Id_Persona'];

    $Comentario = $_POST['Comentario'];
    date_default_timezone_set('America/Bogota');
    $Fecha_Comentario=date("Y-m-d H:i:s");


$sql =("UPDATE comentario set  Comentario='$Comentario', Fecha_Comentario = '$Fecha_Comentario' WHERE  Id_Persona = Id_IdPersona ");

    if($resultado = mysqli_query($mysqli,$sql)){

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