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
<th scope="col">Codigo Id</th>
<th scope="col">Nombre Estudiante</th>
<th scope="col">Numero</th>
<th scope="col">Suma</th>
<th scope="col">Resta</th>
<th scope="col">Definitiva</th>
<th scope="col"><i class="zmdi zmdi-notifications-none"></i>Observacion</th>
</tr>
</thead>
<?php

include "basedatos.php";
$sql =$mysqli->query("SELECT * FROM notas nota 
INNER JOIN personas personas
INNER JOIN comentario comentario
INNER JOIN estudiante estudiante 
ON nota.Id_IdPersona = personas.Id_Persona  and comentario.Id_Persona = estudiante.Id_IdPersona");
while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){
?>
<tbody>
<tr>
<td> <?php echo $mostrar['Id_Persona']?></td>
<td> <?php echo $mostrar['P_Nombre']?></td>
<td> <?php echo $mostrar['Numero']?></td>
<td><?php echo $mostrar['Suma']?></td>
<td><?php echo $mostrar['Resta']?></td>
<td><?php echo $mostrar['Promedio']?></td>

<td><a  href="#" class="btn-Notifications-area">

	<button type="submit">Comentar</button>
</a>
</td>














</tr>


</tbody>
<?php
}
?>
</table>