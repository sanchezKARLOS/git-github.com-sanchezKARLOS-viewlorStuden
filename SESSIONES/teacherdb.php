<?php 

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tipoaep=$_POST['tipoaep'];
$clave=$_POST['clave'];


$query =mysqli_connect("localhost", "root", "", "softwareducativo");
 $sql = "INSERT INTO docente(id, nombre, apellido, tipoaep,clave) VALUES ('$id', '$nombre', '$apellido', '$tipoaep','$clave')";
 
 
 $resultado =mysqli_query($query, $sql);
 if(!$resultado){
     echo "problema al registrar un docente";

 }
 else{
   
     header('location:envia.php');
     echo "registrando..................................por favor espere";
 }
?>