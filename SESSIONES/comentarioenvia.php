<?php
require "basedatos.php";


if(isset($_POST['enviar'])){

    $Comentario = $_POST['Comentario'];
    date_default_timezone_set('America/Bogota');
    $Fecha_Comentario=date("Y-m-d H:i:s");

$sql =("UPDATE comentario set  Comentario='$Comentario', Fecha_Comentario = '$Fecha_Comentario' WHERE Id_Comentario= Id_Comentario");
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

    echo "error";
    mysqli_close($mysqli);
}


?>