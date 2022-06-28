<?php
session_start();
include "basedatos.php";


if(isset($_POST['Id_Persona']) &&  isset ($_POST['Clave'])){
    $Id_Persona=$_POST['Id_Persona'];
    $Clave=$_POST['Clave'];
    
    $consulta ="SELECT * FROM personas WHERE  Id_Persona='$Id_Persona' and Clave='$Clave'";
    $resultado = mysqli_query($mysqli,$consulta);
    $fila = mysqli_num_rows($resultado);
    
    if($fila>0){
    $row = $resultado->fetch_assoc();
    $Clavebased = $row['Clave'];
    $Clave_C = ($Clave);
    if($row == true){
        $Id_Roles = $row['Id_Roles'];
        $_SESSION['Id_Roles'] = $Id_Roles;
    switch($_SESSION['Id_Roles']){
        case 1:  header("location: home.php");
        break;
        case 2:  header("location: paneldocente.php");
        break;
        case 3:  header("location: panelestudiante.php");
        break;
        default;
    }
    }
    else{
        echo ("Error, Id y contraseña incorrectos");
    }
    if($Clavebased == $Clave_C){
       
            $_SESSION ['Id_Persona'] = $row ['Id_Persona'];
            $_SESSION ['Id_Roles']= $row ['Id_Roles'];
            $_SESSION ['P_Nombre']= $row ['P_Nombre'];
    }
    else{
        echo ("Error, La Contraseña no coinciden.");
    }
    
    }
    else{
    echo ("problema al validar los datos");
    
    header("location: index.php");

    }
}

else{
    echo ("campos vacios");
}

mysqli_free_result($resultado);
mysqli_close($mysqli);

?>