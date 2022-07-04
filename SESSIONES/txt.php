<td><?php echo $mostrar['Fecha_Comentario']?></td>







    <select name="Id_Roles" id="Id_Roles" class="Id_Roles" required>
	<?php
$query =mysqli_connect("localhost", "root", "", "softwareducativo");
 $sql = "select * from roles order by id";
 $resultado = mysqli_query($query, $sql);
 while ($mostrar = mysqli_fetch_array($resultado)){
        $id = $mostrar['id'];
		$estado = $mostrar['estado'];
		?>
	<option value="<?php echo $id; ?>"> <?php echo $estado." "?></option>
	<?php
	}
	?>
    </select>

    <td> 
<a href="editarstuden.php?
    Id_Persona=<?php echo $mostrar['Id_Persona']?> &
	P_Nombre=<?php echo $mostrar['P_Nombre']?> &
    S_Nombre=<?php echo $mostrar['S_Nombre']?> &
	P_Apellido=<?php echo $mostrar['P_Apellido']?> &
    S_Apellido=<?php echo $mostrar['S_Apellido']?> &
	Cd_Docente=<?php echo $mostrar['Cd_Docente']?> &
    Grado=<?php echo $mostrar['Grado']?> &
	Clave=<?php echo $mostrar['Clave']?>">Editar</a>
	
<a href="./student.php">Registrar</a>
</td>



("SELECT * FROM notas nota
INNER JOIN personas personas
INNER JOIN comentario comentario
ON nota.Id_IdPersona = personas.Id_Persona and nota.Id_IdPersona = comentario.Id_Persona ")


<a  href="#" class="btn-Notifications-area">

	<button type="submit">Comentar</button>
</a>

SELECT * FROM notas nota
INNER JOIN estudiante estudiante
INNER JOIN comentario comentario
ON nota.Id_Estudiante = estudiante.Id_IdEstudiante and comentario.Id_Comentario = estudiante.Id_Comentario

SELECT * FROM notas nota
INNER JOIN estudiante estudiante
INNER JOIN comentario comentario
ON nota.Id_Notas = estudiante.Id_IdNota and estudiante.Id_Comentario = comentario.Id_Comentario


SELECT * FROM  personas personas
INNER JOIN estudiante estudiante 
INNER JOIN comentario comentario
ON personas.Id_Persona = estudiante.Id_IdPersona and personas.Id_Persona = '1007582633'




SELECT * FROM estudiante estudiante
INNER JOIN notas nota
INNER JOIN comentario comentario
ON estudiante.Id_IdPersona = '1007582633' and estudiante.Id_IdEstudiante = nota.Id_Estudiante and estudiante.Id_Comentario = comentario.Id_Comentario


SELECT comentario, estudiante.Id_IdPersona , Numero, suma, Resta  FROM estudiante estudiante
INNER JOIN notas nota
INNER JOIN comentario comentario
ON estudiante.Id_IdPersona = '1007582633' and estudiante.Id_IdEstudiante = nota.Id_Estudiante and estudiante.Id_Comentario = comentario.Id_Comentario




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
$sql =$mysqli->query("SELECT * FROM  personas personas
INNER JOIN estudiante estudiante
ON personas.Id_Persona = estudiante.Id_IdPersona ");
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




SELECT comentario, Numero, suma, Resta  FROM estudiante estudiante
INNER JOIN notas nota
INNER JOIN comentario comentario
ON estudiante.Id_IdPersona = '1007582633' and estudiante.Id_IdEstudiante = nota.Id_Estudiante and estudiante.Id_Comentario = comentario.Id_Comentario



SELECT comentario, Numero, Suma, Resta FROM estudiante estudiante 
INNER JOIN notas nota 
INNER JOIN comentario comentario 
INNER JOIN personas persona 
ON estudiante.Id_IdPersona = persona.Id_Persona and estudiante.Id_IdEstudiante = nota.Id_Estudiante and estudiante.Id_Comentario = comentario.Id_Comentario;


<?php
include "basedatos.php";
$sql =$mysqli->query("SELECT * FROM notA
INNER JOIN estudiante estudiante
ON personas.Id_Persona = estudiante.Id_IdPersona ");
while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){
?>

SELECT comentario, Numero, Suma, Resta FROM estudiante estudiante INNER JOIN notas nota INNER JOIN comentario comentario ON estudiante.Id_IdPersona = 1004956758 and estudiante.Id_IdEstudiante = nota.Id_Estudiante and estudiante.Id_IdEstudiante = comentario.Id_Estudiante

SELECT comentario, Numero, Suma, Resta FROM estudiante estudiante INNER JOIN notas nota INNER JOIN comentario comentario ON estudiante.Id_IdPersona = 1004956758 and estudiante.Id_IdEstudiante = nota.Id_Estudiante and estudiante.Id_IdEstudiante = comentario.Id_Estudiante