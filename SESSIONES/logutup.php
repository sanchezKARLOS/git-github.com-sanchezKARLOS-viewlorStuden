<?php
session_start();
error_reporting(0);

$varsession =$_SESSION['nombre'];
if($varsession ==null || $varsession==''){
   
    echo "usted no esta autorizado, inicie session";
die();
}
session_destroy();
header("location:.php")
?>