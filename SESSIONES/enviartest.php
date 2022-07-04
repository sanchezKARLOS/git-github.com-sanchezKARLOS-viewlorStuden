<?php

include "basedatos.php";

$resultado = $_POST['resultado'];


$sql =("UPDATE notas set resultado='$resultado' WHERE  Suma = 'Id_Estudiante'");
$resultado= mysqli_query($mysqli,$sql);

if($resultado){
    echo "quiz registrado";
    
}
else {
    echo "erro";
    
}

?>