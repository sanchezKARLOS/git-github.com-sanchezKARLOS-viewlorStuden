
<table class="table">
<thead>
<tr>

<th scope="col">OBSERVACIONES</th>

</tr>
</thead>
<?php
include "basedatos.php";
$sql =$mysqli->query("SELECT * FROM notas nota
INNER JOIN estudiante estudiante
INNER JOIN comentario comentario
ON nota.Id_IdPersona = estudiante.Id_IdPersona and nota.Id_Nota = estudiante.Id_IdNota ");
while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){
?>

<tbody>


<thead>
<tr>
<td><?php echo $mostrar['Fecha_Comentario']?> </td>

</tr>
</thead>

<thead>
<tr>
    <td><?php echo $mostrar['Comentario']?> </td>
</tr>
</thead>

<?php
}
?>


</tbody>
</table>