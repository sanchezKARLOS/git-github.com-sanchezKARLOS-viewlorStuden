<?php 
    
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tipoaep=$_POST['tipoaep'];
$grado=$_POST['grado'];
$edad=$_POST['edad'];
$cdteacher=$_POST['cdteacher'];
$clave=$_POST['clave'];


$query =mysqli_connect("localhost", "root", "", "softwareducativo");
 $sql = "INSERT INTO estudiante(id,nombre, apellido, tipoaep, grado, edad, cdteacher, clave)VALUES ('$id', '$nombre', '$apellido', '$tipoaep', '$grado', '$edad', '$cdteacher', '$clave')";
 $resultado =mysqli_query($query, $sql);
 if(!$resultado){
     echo "problema al registrar un estudiante";

 }
 else{
     header('location:mainstuden.php');
 }

?>
