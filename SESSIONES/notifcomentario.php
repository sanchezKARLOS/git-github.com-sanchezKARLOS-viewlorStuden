<?php

$P_Nombre=$_SESSION['P_Nombre'];
if(!isset($_SESSION['Id_Roles'])){
	header("location: index.php");
}
else{
	if($_SESSION['Id_Roles'] !=2){
		header("location: index.php");
	}
}
?>
<table class="table">
<thead>

<tr>

<th scope="col">  AGREGAR OBVSERVACION</th>


</tr>
</thead>
<?php
include "basedatos.php";
?>
<?php



$sql =$mysqli->query("SELECT * FROM notas nota 
INNER JOIN personas personas
INNER JOIN comentario comentario
INNER JOIN estudiante estudiante 
ON nota.Id_IdPersona = personas.Id_Persona  and comentario.Id_Persona = estudiante.Id_IdPersona");
while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){
?>

<tbody>
<tr>

<?php

date_default_timezone_set('America/Bogota');
$Fecha_Comentarioactual=date("Y-m-d H:i:s");
?>
<form action="comentarioenvia.php" method="post" name="frommane" id="fromcometar" id="idfrocomentar">
<tr>
<tr><td><input id ="fecha_comentario" type="datetime" value="<?= $Fecha_Comentarioactual ?>" name="fecha" disabled></td></tr>
<tr><td><input type="text" name="Id_Persona" id="Id_Persona" class="Id_Persona" value="<?php echo $mostrar['Id_Persona']?>" autocomplete="off" disabled ></td></tr>
<tr><td><textarea name="Comentario" id="Comentario" class="Comentario" placeholder="Escribe Comentario" require></textarea></td></tr>
<tr><td><input id="enviar" name="enviar" type="Submit" value="Enviar"></td></tr>
</form>
<?php
}
?>
</tr>	
</tbody>
</table>