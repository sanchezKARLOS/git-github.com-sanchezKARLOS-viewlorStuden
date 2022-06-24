<?php 
    
$Id_IdPersona=$_POST['Id_IdPersona'];
$Cd_Docente=$_POST['Cd_Docente'];
$Grado=$_POST['Grado'];
$Nota=$_POST['Nota'];


$query =mysqli_connect("localhost", "root", "", "softwareducativo");
 $sql = "INSERT INTO estudiante(Id_IdPersona, Cd_Docente, Grado, Nota)VALUES 
 ('$Id_IdPersona', '$Cd_Docente', '$Grado', '$Nota')";
 $resultado =mysqli_query($query, $sql);
 if(!$resultado){
     echo "problema al registrar un estudiante";
 }
 else{
     header('location:panelestudiante.php');
 }

?>
