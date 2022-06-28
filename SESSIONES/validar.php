<?php
include "basedatos.php";
session_start();

if($_POST){
$Id_Persona=$_POST['Id_Persona'];
$Clave=$_POST['Clave'];

$consulta ="SELECT * FROM personas WHERE  Id_Persona='$Id_Persona' and Clave='$Clave'";
$resultado = mysqli_query($mysqli,$consulta);
$fila = mysqli_num_rows($resultado);

if($fila>0){
$row = $resultado->fetch_assoc();
$Clavebased = $row['Clave'];
$Clave_C = ($Clave);

if($Clavebased == $Clave_C){

    $_SESSION ['Id_Persona'] = $row ['Id_Persona'];
    $_SESSION ['Id_Roles']= $row ['Id_Roles'];
    $_SESSION ['P_Nombre']= $row ['P_Nombre'];
    header("location: panelestudiante.php");
}
else{
    echo ("error con clave");
}

}

else{
echo ("problema al validar los datos");
}

}
else{
    echo ("campos vacios");
}
mysqli_free_result($resultado);
mysqli_close($mysqli);

?>