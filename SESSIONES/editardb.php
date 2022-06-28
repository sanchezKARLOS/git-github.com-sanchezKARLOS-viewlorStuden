<?php 

include 'basedatos.php';

$Id_Persona = $_POST['Id_Persona'];
$P_Nombre = $_POST['P_Nombre'];
$S_Nombre = $_POST['S_Nombre'];
$P_Apellido= $_POST['P_Apellido'];
$S_Apellido = $_POST['S_Apellido'];
$Cd_Docente = $_POST['Cd_Docente'];
$Grado = $_POST['Grado'];
$Clave = $_POST['Clave'];


$sql =$mysqli->query("UPDATE * SET (Id_Persona=$Id_Persona
P_Nombre=$P_Nombre, S_Nombre=$S_Nombre, P_Apellido=$P_Apellido, S_Apellido=$S_Apellido, Clave=$Clave)
WHERE $Id_Persona = 1 ");
$resultado =($sql);

///actualiza   
 if(!$resultado){
     echo "error al actualizar datos";
     header('location: editarstuden.php');
 }

 else{
     echo "datos actualizados correctamente";
     header('location: home.php');
 }


?>