<head>
<script src="./js/validarcomentario.js"></script>
</head>
<?php
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
<th scope="col">Codido Id</th>
<th scope="col">Numero</th>
<th scope="col">Suma</th>
<th scope="col">Resta</th>
<th scope="col">Definitiva</th>

</tr>
</thead>
<?php

include "basedatos.php";
$sql =$mysqli->query("SELECT estudiante.Id_IdPersona as Id_Persona, estudiante.Id_IdEstudiante as Id_Estudiante ,Numero, Suma, Resta, promedio FROM estudiante estudiante 
INNER JOIN notas nota 
INNER JOIN comentario comentario 
ON estudiante.Id_IdEstudiante = comentario.Id_Estudiante and estudiante.Id_IdNota = nota.Id_Notas
");

while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){
	
?>

<tbody>

<form action="comentarioenvia.php" method="post" name="frommane" id="fromcometar" id="idfrocomentar">

<input type="number" name="Id_Estudiante" value=<?php echo $mostrar['Id_Estudiante']?>  style='display:none'>
<tr>

<td><?php echo $mostrar['Id_Persona']?></td>
<td> <?php echo $mostrar['Numero']?></td>
<td><?php echo $mostrar['Suma']?></td>
<td><?php echo $mostrar['Resta']?></td>
<td><?php echo $mostrar['promedio']?></td>


<td>
<?php
date_default_timezone_set('America/Bogota');
$Fecha_Comentarioactual=date("Y-m-d H:i:s");
?>
<td><textarea name="Comentario" id="Comentario" class="Comentario" placeholder="Escribe Comentario" require></textarea></td>
<td><input id ="fecha_comentario" type="datetime" value="<?= $Fecha_Comentarioactual ?>" name="fecha"  style="display: none;"        ></td>
<td><input id="enviar" name="enviar" type="Submit" value="Enviar"></td></tr>
</form>
</td>

</tr>
</tbody>
<?php
}
?>
</table>