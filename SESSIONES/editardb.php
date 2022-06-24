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
 $sql = "UPDATE  estudiante set id='$id', nombre='$nombre', apellido='$apellido', tipoaep='$tipoaep',
  grado='$grado', edad='$edad', cdteacher='$cdteacher', clave='$clave' WHERE id like $id";
 $resultado =mysqli_query($query, $sql);
 if(!$resultado){
     echo "error al actualizar datos";

 }
 else{
     echo "datos actualizados correctamente";
     header('location:mainstuden.php');
 }

    




?>