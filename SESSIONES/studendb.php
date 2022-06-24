<?php 
    
$id=$_POST['id'];
$tipoaep=$_POST['tipoaep'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$grado=$_POST['grado'];
$cdteacher=$_POST['cdteacher'];
$clave=$_POST['clave'];


$query =mysqli_connect("localhost", "root", "", "softwareducativo");
 $sql = "INSERT INTO Personas(id, tipoaep, nombre , apellido, edad, grado, cdteacher, clave)VALUES ('$id', '$tipoaep', '$nombre', '$apellido', '$edad', '$grado', '$cdteacher', '$clave')";
 $resultado =mysqli_query($query, $sql);
 if(!$resultado){
     echo "problema al registrar un estudiante";

 }
 else{
     header('location:panelestudiante.php');
 }

?>
