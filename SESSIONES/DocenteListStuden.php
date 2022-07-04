<?php
session_start();
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
	
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Docente</title>
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
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title"><small>Bienvenido <?php echo $P_Nombre; ?></small></div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./img/user1.png" alt="UserIcon">
				</figure>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="paneldocente.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>volver
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
			</section>
			<!--from-->
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active in" id="new">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-md-10 col-md-offset-1">
</div>
</div>
    <table class="table">
	<thead>
        <tr>
            <th scope="col">Codigo Id </th>
            <th scope="col">Nombre</th>
			<th scope="col">Segundo Nombre </th>
			<th scope="col">Apellido </th>
            <th scope="col">Segundo Apellido </th>
        </tr>
		</thead>
<?php
include "basedatos.php";
$sql =$mysqli->query("SELECT * FROM personas persona
INNER JOIN estudiante estudiante ON persona.Id_Persona = estudiante.Id_IdPersona");
while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){

?>
<tbody>
<tr>
<th scope="col" ><?php echo $mostrar['Id_Persona']?></th>
<td><?php echo $mostrar['P_Nombre']?></td>
<td><?php echo $mostrar['S_Nombre']?></td>
<td><?php echo $mostrar['P_Apellido']?></td>
<td><?php echo $mostrar['S_Apellido']?></td>
</tr>
<?php
}
?>
<tbody>
</table>
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
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>