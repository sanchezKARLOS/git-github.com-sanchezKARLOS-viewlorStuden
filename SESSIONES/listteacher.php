<!DOCTYPE html>
<html lang="es">
<head>
	<title>Estudiante</title>
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
				Matematicas Basica
			</div>
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
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> Configuracion Estudio<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="erro404.html"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>Datos de estudio</a>
						</li>
					</ul>
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
				  <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Docente Matriculados</br> 
					<!--<small>Editar Perfil</small></h1>-->
				</div>
			</div>
			<!--from-->
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active in" id="new">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-md-10 col-md-offset-1">
<form action="buscardb.php" method="post">
    <input type="text" name="buscar" class="buscar" id="buscar">
    <input type="submit" value="buscar">
    <a href="./student.php">nuevo</a>
    </form>
</div>
</div>
<div>
<div>
    <table border="1px" class="table">
    <tr>
            <td scope="col">Codigo Id </td>
            <td scope="col">Nombre</td>
			      <td scope="col">Segundo Nombre </td>
		      	<td scope="col">Apellido </td>
            <td scope="col">Segundo Apellido </td>
            <td scope="col">Clave </td>
			<td scope="col">Estado</td>
            <td scope="col">OPCIONES</td>
        </tr>
<?php
include "basedatos.php";
$sql =$mysqli->query("SELECT * FROM personas persona
INNER JOIN docentes docente ON persona.Id_Persona = docente.Id_Persona");
while ($mostrar = $sql->fetch_array(MYSQLI_BOTH)){

?>
<tr>
<td><?php echo $mostrar['Id_Persona']?></td>
<td><?php echo $mostrar['P_Nombre']?></td>
<td><?php echo $mostrar['S_Nombre']?></td>
<td><?php echo $mostrar['P_Apellido']?></td>
<td><?php echo $mostrar['S_Apellido']?></td>
<td><?php echo $mostrar['Clave']?></td>
<td><?php
if($mostrar['Estado']=="1"){
             echo'<a href ="Estado.php?Id_Persona='.$mostrar['Id_Persona'].'&Estado=0" class="btn btn-success btnprueba btn-xs">Activo</a>';
          }else{
             echo'<a href ="Estado.php?Id_Persona='.$mostrar['Id_Persona'].'&Estado=1" class="btn btn-danger btnprueba btn-xs">Inactivo</a>';
          }
?>
</td>
<td> 
<a href="editarteacher.php?
    Id_Persona=<?php echo $mostrar['Id_Persona']?> &
	P_Nombre=<?php echo $mostrar['P_Nombre']?> &
    S_Nombre=<?php echo $mostrar['S_Nombre']?> &
	P_Apellido=<?php echo $mostrar['P_Apellido']?> &
    S_Apellido=<?php echo $mostrar['S_Apellido']?> &
	Clave=<?php echo $mostrar['Clave']?>

    ">editar</a>
</td>
</tr>
<?php
}
?>
</table>
										</div>
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
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>