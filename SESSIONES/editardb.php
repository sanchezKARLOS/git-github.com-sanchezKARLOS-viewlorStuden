<?php 
    
    $Id_Persona = $_GET['Id_Persona'];
    $P_Nombre = $_GET['P_Nombre'];
    $S_Nombre = $_GET['S_Nombre'];
    $P_Apellido= $_GET['P_Apellido'];
    $S_Apellido = $_GET['S_Apellido'];
    $Cd_Docente = $_GET['Cd_Docente'];
    $Grado = $_GET['Grado'];
    $Clave = $_GET['Clave'];

include "basedatos.php";
 $sql = $mysqli->query("UPDATE  personas set Id_Persona='$Id_Persona', P_Nombre=' $P_Nombre', S_Nombre='$S_Nombre', P_Apellido='$P_Apellido', S_Apellido='$S_Apellido', Clave='$Clave' WHERE Id_Persona like $Id_Persona");
 $resultado =($sql);
echo ($resultado);
///actualiza 

 $sql2 = "UPDATE  estudiante set Cd_Docente='$Cd_Docente', Grado=' $Grado' WHERE Id_Persona like $Id_Persona";
 $resultado2 =mysqli_query($query, $sql2);

 if(!$resultado){
     echo "error al actualizar datos";
     header('location:editarstuden.php');

 }
 else{
     echo "datos actualizados correctamente";
     header('location:home.php');
 }


?>