<?php
session_start();
$Id_Persona=$_SESSION['Id_Persona'];
$P_Nombre=$_SESSION['P_Nombre'];
if(!isset($_SESSION['Id_Roles'])){
	header("location: index.php");
}
else{
	if($_SESSION['Id_Roles'] !=1){
		header("location: index.php");
	}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista Estudiantes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/frstuden.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
			<small>Bienvenido <?php echo $P_Nombre; ?></small></div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./img/user1.png" alt="UserIcon">
				</figure>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>volver
					</a>
				</li>
				<li>
					<a href="./student.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>Registrar
					</a>
				</li>
			</ul>

		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled">
			<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-exit-system">
						<i class="zmdi zmdi-power"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
	
			<!-- Content page -->
			<div class="container-fluid">
				<div class="page-header">
				  <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Estudiantes Matriculados</br> 
					<!--<small>Editar Perfil</small></h1>-->
				</div>
			</div>
			<!--from-->
<div class="container-fluid">

<div class="col-xs-12">
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active in" id="new">
<div class="container-fluid">

<div>
<div>
    <table class="table">
	<thead>
        <tr>
            <td scope="col">Codigo Id </td>
            <td scope="col">Nombre</td>
			<td scope="col">Segundo Nombre </td>
			<td scope="col">Apellido </td>
            <td scope="col">Segundo Apellido </td>
			<td scope="col">Codigo Docente </td>
            <td scope="col">Grado</td>
			<td scope="col">Estado</td>
		<td scope="col"><i class="zmdi zmdi-settings"></i> Opciones</td>
			
			
        </tr>
</thead>
<?php
include "basedatos.php";
$sql =$mysqli->query("SELECT * FROM personas persona
INNER JOIN estudiante estudiante ON persona.Id_Persona = estudiante.Id_IdPersona and persona.Id_Roles = 3");
while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){
?>
<tbody> 
<tr>
<td><?php echo $mostrar['Id_Persona']?></td>
<td><?php echo $mostrar['P_Nombre']?></td>
<td><?php echo $mostrar['S_Nombre']?></td>
<td><?php echo $mostrar['P_Apellido']?></td>
<td><?php echo $mostrar['S_Apellido']?></td>
<td><?php echo $mostrar['Cd_Docente']?></td>
<td><?php echo $mostrar['Grado']?></td>
<td>
	<?php
if($mostrar['Estado']=="1"){
             echo'<a href ="Estado.php?Id_Persona='.$mostrar['Id_Persona'].'&Estado=0" class="btn btn-success btnprueba btn-xs">Activo</a>';
          }else{
             echo'<a href ="Estado.php?Id_Persona='.$mostrar['Id_Persona'].'&Estado=1" class="btn btn-danger btnprueba btn-xs">Inactivo</a>';
          }
?>
</td>
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
</td>

</tr>

<?php
}
?>
</tbody>
</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
<!--end from-->	
	<!-- Notifications area -->	
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/evitarenvioformulario.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>