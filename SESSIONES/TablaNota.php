
<table class="table">
<thead>
<tr>

<th scope="col">Temas</th>
<th scope="col">Definitiva</th>

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
</tr>
<tr>

<td>Suma</td>
<td><?php echo $mostrar['Suma']?></td>

</tr>

<tr>
<td>Resta</td>
<td><?php echo $mostrar['Resta']?></td>
</tr>

<?php
}
?>
</tbody>
</table>