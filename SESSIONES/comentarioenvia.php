<?php

require "basedatos.php";

$Id_Persona = $_POST['Id_Persona'];
$Comentario = $_POST['Comentario'];
$Fecha_Comentario = $_POST['Fecha_Comentario'];


$sql =("UPDATE comentario set Comentario='$Comentario' Fecha_Comentario = '$Fecha_Comentario' WHERE Id_Persona ='$Id_Persona'");
 $resultado = mysqli_query($mysqli,$sql);

if($resultado){
    echo "Comentario envio con exito";
    return header("location: DocenteNotasEstudiante.php");
}
else{
    echo "error";
}

mysqli_close($mysqli);

?>