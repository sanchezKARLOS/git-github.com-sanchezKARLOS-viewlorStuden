<?php
session_start();
require "basedatos.php";


$query =mysqli_connect("localhost", "root", "", "softwareducativo");
 $sql = "SELECT * FROM personas
 where P_Nombre like '$Buscar' '%' or P_Apellido like '$Buscar' '%' order by Id_Persona desc ";
 $resultado = mysqli_query($query, $sql);
?>