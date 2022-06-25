<?php 
    
$Id_Persona=$_POST['Id_Persona'];
$Id_Roles=$_POST['Id_Roles'];
$P_Nombre=$_POST['P_Nombre'];
$P_Apellido=$_POST['P_Apellido'];
$Clave=$_POST['Clave'];

$query =mysqli_connect("localhost", "root", "", "softwareducativo");
$sql = "INSERT INTO personas(Id_Persona, Id_Roles, P_Nombre, P_Apellido,Clave)VALUES 
('$Id_Persona', '$Id_Roles', '$P_Nombre','$P_Apellido'.'$Clave')";
$resultado =mysqli_query($query, $sql);


$Cd_Docente=$_POST['Cd_Docente'];
$Grado=$_POST['Grado'];

$sql2 = "INSERT INTO docentes(Id_IdPersona, Cd_Docente, Grado)VALUES 
('$Id_Persona','$Cd_Docente','$Grado')";
$resultado2 =mysqli_query($query, $sql2);

 if(!$resultado){
     echo "problema al registrar una persona ";

 }
 else{
    echo "exito al registrar";
     header('location:home.php');
 }

?>