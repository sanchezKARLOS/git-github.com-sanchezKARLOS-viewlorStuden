

<table class="table">
<thead>
<tr>

<th scope="col">Temas</th>
<th scope="col">Nota</th>
<th scope="col">Observaciones</th>
</tr>
</thead>
<?php
include "basedatos.php";
$sql =$mysqli->query("SELECT * FROM notas nota 
INNER JOIN personas personas
ON nota.Id_IdPersona = personas.Id_Persona ");
while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){

?>

<tbody>

<tr>
<td>Numero</td>
<td><?php echo $mostrar['Numero']?></td>
<td>@fat</td>

</tr>
<tr>

<td>Suma</td>
<td><?php echo $mostrar['Suma']?></td>
<td>@fat</td>
</tr>

<tr>
<td>Resta</td>
<td><?php echo $mostrar['Resta']?></td>
<td>Otto</td>
</tr>

<?php
}
?>
</tbody>
</table>