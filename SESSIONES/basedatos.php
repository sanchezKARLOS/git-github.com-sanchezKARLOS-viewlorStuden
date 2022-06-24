<?php

 $_hostname = "localhost";
 $_username = "root";
 $_clavedb = "";
 $_databd = "softwareducativo";

$mysqli = mysqli_connect($_hostname, $_username, $_clavedb, $_databd);
if($mysqli){
    echo ("ingresando a la base de datos...");
}

?>


