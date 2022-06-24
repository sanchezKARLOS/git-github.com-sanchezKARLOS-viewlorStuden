<?php 
    
$id_Persona=$_POST['id_Persona'];
$Id_Roles=$_POST['Id_Roles'];
$P_nombre=$_POST['P_nombre'];
$S_nombre=$_POST['S_nombre'];
$P_apellido=$_POST['P_apellido'];
$S_apellido=$_POST['S_apellido'];
$Edad=$_POST['Edad'];
$Fecha_Nacimiento=$_POST['Fecha_Nacimiento'];
$Correo_Electronico=$_POST['Correo_Electronico'];
$Usuario=$_POST['Usuario'];
$Clave=$_POST['Clave'];



$query =mysqli_connect("localhost", "root", "", "softwareducativo");
 $sql = "INSERT INTO personas(id_Persona, Id_Roles,P_nombre ,S_nombre, P_apellido,S_apellido, Edad, Fecha_Nacimiento,Correo_Electronico, Usuario, Clave)VALUES 
 ('$id_Persona', '$Id_Roles', '$P_nombre', '$S_nombre', '$P_apellido', '$S_apellido', '$Edad', '$Fecha_Nacimiento', '$Correo_Electronico', '$Usuario','$Clave')";
 $resultado =mysqli_query($query, $sql);
 if(!$resultado){
     echo "problema al registrar una persona ";

 }
 else{
     header('location:panelestudiante.php');
 }

?>
