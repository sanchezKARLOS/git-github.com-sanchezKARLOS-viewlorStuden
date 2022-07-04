<?php 
    
$Id_Persona=$_POST['Id_Persona'];
$Id_Roles=$_POST['Id_Roles'];
$P_Nombre=$_POST['P_Nombre'];
$S_Nombre=$_POST['S_Nombre'];
$P_Apellido=$_POST['P_Apellido'];
$S_Apellido=$_POST['S_Apellido'];
$Clave=$_POST['Clave'];

$query =mysqli_connect("localhost", "root", "", "softwareducativo");
$sql = "INSERT INTO personas(Id_Persona, Id_Roles, P_Nombre, S_Nombre, P_Apellido, S_Apellido, Clave)VALUES 
('$Id_Persona', '$Id_Roles', '$P_Nombre','$S_Nombre','$P_Apellido','$S_Apellido','$Clave')";

$resultado =mysqli_query($query, $sql);

$Cd_Docente=$_POST['Cd_Docente'];
$Grado=$_POST['Grado'];

$sql2 = "INSERT INTO estudiante(Id_IdPersona, Cd_Docente, Grado)VALUES 
('$Id_Persona','$Cd_Docente','$Grado')";
echo "$sql2";

$resultado2 =mysqli_query($query, $sql2);


 if(!$resultado){
     echo "problema al registrar una persona ";

 }
 else{
    echo "exito al registrar";
     header('location:home.php');
 }
 if(!$resultado2){
    echo "problema al registrar una persona ";

}
else{
   echo "exito al registrar";
    header('location:home.php');
}

?>
