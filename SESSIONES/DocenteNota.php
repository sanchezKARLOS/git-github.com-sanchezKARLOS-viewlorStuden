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
<th scope="col">Codido Id</th>
<th scope="col">Nombre Estudiante</th>
<th scope="col">Numero</th>
<th scope="col">Suma</th>
<th scope="col">Resta</th>
<th scope="col">Definitiva</th>
<th scope="col">Observacion</th>

</tr>
</thead>
<?php

include "basedatos.php";
$sql =$mysqli->query("SELECT * FROM notas nota
INNER JOIN personas personas
INNER JOIN comentario comentario
ON nota.Id_IdPersona = personas.Id_Persona and nota.Id_IdPersona = comentario.Id_Persona ");
while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){
?>

<tbody>

<form action="comentarioenvia.php" method="post" name="frommane" id="fromcometar" id="idfrocomentar">
<tr>
<td><input type="text" name="Id_Persona" id="Id_Persona" class="Id_Persona" value="<?php echo $mostrar['Id_Persona']?>" autocomplete="off" disabled ></td>
<td> <?php echo $mostrar['P_Nombre']?></td>
<td> <?php echo $mostrar['Numero']?></td>
<td><?php echo $mostrar['Suma']?></td>
<td><?php echo $mostrar['Resta']?></td>
<td><?php echo $mostrar['Promedio']?></td>







<td>
<?php
date_default_timezone_set('America/Bogota');
$Fecha_Comentarioactual=date("Y-m-d H:i:s");
?>
<td><textarea name="Comentario" id="Comentario" class="Comentario" placeholder="Escribe Comentario" require></textarea></td>
<td><input id ="fecha_comentario" type="datetime" value="<?= $Fecha_Comentarioactual ?>" name="fecha"    style="display: none;"      ></td>
<td><input id="enviar" name="enviar" type="Submit" value="Enviar"></td></tr>


</form>

</td>




















</tr>
</tbody>
<?php
}
?>
</table>