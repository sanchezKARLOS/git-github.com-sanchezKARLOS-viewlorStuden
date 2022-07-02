
<table class="table">
<thead>
<tr>

<th scope="col">Temas</th>
<th scope="col">Definitiva</th>
<th scope="col">Observaciones</th>
<th scope="col">Fecha</th>

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
<tr>
<td>Numero</td>
<td><?php echo $mostrar['Numero']?></td>
<td><?php echo $mostrar['Comentario']?></td>
<td><?php echo $mostrar['Fecha_Comentario']?> </td>
</tr>
<tr>

<td>Suma</td>
<td><?php echo $mostrar['Suma']?></td>
<td><?php echo $mostrar['Comentario']?></td>
<td><?php echo $mostrar['Fecha_Comentario']?> </td>
</tr>

<tr>
<td>Resta</td>
<td><?php echo $mostrar['Resta']?></td>
<td><?php echo $mostrar['Comentario']?></td>
<td><?php echo $mostrar['Fecha_Comentario']?> </td>
</tr>

<?php
}
?>
</tbody>
</table>