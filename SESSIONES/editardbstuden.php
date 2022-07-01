<?php 

include_once "basedatos.php";

$Id_Persona = $_POST['Id_Persona'];
$P_Nombre = $_POST['P_Nombre'];
$S_Nombre = $_POST['S_Nombre'];
$P_Apellido= $_POST['P_Apellido'];
$S_Apellido = $_POST['S_Apellido'];
$Clave = $_POST['Clave'];  

$sql =("UPDATE personas set P_Nombre='$P_Nombre', S_Nombre='$S_Nombre', P_Apellido='$P_Apellido', S_Apellido='$S_Apellido', Clave='$Clave'
WHERE Id_Persona='$Id_Persona'");
$resultado= mysqli_query($mysqli,$sql);

$Id_IdPersona=$_POST['Id_IdPersona']; 
$Cd_Docente=$_POST['Cd_Docente'];   
$Grado=$_POST['Grado'];

$sql2 =("UPDATE estudiante set Cd_Docente='$Cd_Docente', Grado='$Grado' WHERE Id_IdPersona ='$Id_Persona' ");
$resultado2 = mysqli_query($mysqli,$sql2);


///actualiza 

 if($resultado){

    echo "datos actualizados correctamente";
    return header("location: liststuden.php");
   
     
 }

 else{
    return "error";
    
 }
 if($resultado2){
   echo "datos actualizados correctamente";
   return header("location: liststuden.php");
  
    
}

else{
   return "error";
   
}

?>