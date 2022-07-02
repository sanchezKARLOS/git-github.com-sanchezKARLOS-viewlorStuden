<table class="table">
<thead>

<tr>

<th scope="col">Nombre Estudiante</th>
<th scope="col">Numero</th>
<th scope="col">Suma</th>
<th scope="col">Resta</th>
<th scope="col">Definitiva</th>
<th scope="col"></th>
<th scope="col">Agregar Comentario</th>


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
<td> <?php echo $mostrar['P_Nombre']?></td>
<td> <?php echo $mostrar['Numero']?></td>
<td><?php echo $mostrar['Suma']?></td>
<td><?php echo $mostrar['Resta']?></td>
<td><?php echo $mostrar['Promedio']?></td>
<td><?php echo $mostrar['Comentario']?></td>
<td><?php echo $mostrar['Fecha_Comentario']?></td>

<?php
}
?>
<td><form action="comentarioenvia.php" method="POST" name="" id="fromcometar" id="idfrocomentar">
<td><textarea name="Comentario" id="Comentario" class="Comentario" placeholder="Escribe Comentario" require></textarea></td>
<td><input id="enviar" type="button" value="Enviar"></td>
</td>
</tr>
</form>
</tbody>
</table>x