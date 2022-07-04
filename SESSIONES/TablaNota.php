<?php

include "basedatos.php";

if(!isset($_SESSION['Id_Roles'])){
	header("location: index.php");
}
else{
	if($_SESSION['Id_Roles'] !=3){
		header("location: index.php");
	}
}

$Id_Persona=$_SESSION ['Id_Persona'];

$sql = ("SELECT comentario, Numero, Suma, Resta FROM estudiante estudiante 
INNER JOIN notas nota 
INNER JOIN comentario comentario  
ON estudiante.Id_IdPersona = {$Id_Persona} and estudiante.Id_IdEstudiante = nota.Id_Estudiante and estudiante.Id_IdEstudiante = comentario.Id_Estudiante");

$resultado = mysqli_query($mysqli, $sql);

while ($mostrar=mysqli_fetch_array($resultado))
{
?>

<table class="table">
<thead>
<tr>
<th scope="col">Codigo Id</th>
<th scope="col">Temas</th>
<th scope="col">Definitiva</th>

</tr>
</thead>


<tbody>
<tr>
<td><?=$Id_Persona?></td>
<td>Numero</td>
<td><?php echo $mostrar['Numero']?></td>
<td><?php echo $mostrar['comentario']?></td>


</tr>
<tr>
<td><?=$Id_Persona?></td>
<td>Suma</td>
<td><?php echo $mostrar['Suma']?></td>

</tr>

<tr>
<td><?=$Id_Persona?></td>
<td>Resta</td>
<td><?php echo $mostrar['Resta']?></td>
</tr>

<?php
}
?>
</tbody>
</table>

