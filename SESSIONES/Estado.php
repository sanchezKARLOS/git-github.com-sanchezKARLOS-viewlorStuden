<?php
require "basedatos.php";


$Id_Persona =$_GET['Id_Persona'];
$Estado =$_GET['Estado'];

$sql =  "UPDATE  personas SET Estado= '$Estado' WHERE Id_Persona = $Id_Persona ";

mysqli_query($mysqli, $sql);
header("location: liststuden.php");
?>