
<table class="table">
<thead>
<tr>
<th scope="col">Codigo Id</th>
<th scope="col">Temas</th>
<th scope="col">Definitiva</th>

</tr>
</thead>
<?php
include "basedatos.php";
$sql =$mysqli->query("SELECT * FROM notas nota
INNER JOIN estudiante estudiante
INNER JOIN personas persona 
INNER JOIN comentario comentario
ON nota.Id_IdPersona =persona.Id_Persona and estudiante.Id_Comentario = comentario.Id_Comentario  ");
while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){
?>



<tbody>
<tr>
<td><?php echo $mostrar['Id_IdPersona']?></td>
<td>Numero</td>
<td><?php echo $mostrar['Numero']?></td>
<td><?php echo $mostrar['Comentario']?></td>

</tr>
<tr>
<td><?php echo $mostrar['Id_IdPersona']?></td>
<td>Suma</td>
<td><?php echo $mostrar['Suma']?></td>

</tr>

<tr>
<td><?php echo $mostrar['Id_IdPersona']?></td>
<td>Resta</td>
<td><?php echo $mostrar['Resta']?></td>
</tr>

<?php
}
?>
</tbody>
</table>