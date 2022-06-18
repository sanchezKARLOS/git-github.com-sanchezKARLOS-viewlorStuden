<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Matematica Basica<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./img/user1.png" alt="UserIcon">
					<!--<figcaption class="text-center text-titles">Administrador</figcaption>-->
				</figure>
			
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
					</i>Estudiante<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="student.php"></i>Registrar Estudiante</a>
						</li>
						<li>
							<a href="horario.html"></i> Listado Estudiante
						</a>
						</li>
						<li>
							<a href="horario.html"><i class="zmdi zmdi-settings"></i>  Editar Estudiante
						</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						Docente<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="teacher.php">Registrar Docente</a>
						</li>
						<li>
							<a href="horario.html"> Listado Docente
						</a>
						</li>
						<li>
						 <a href=""><i class="zmdi zmdi-settings"></i>  Editar Docente</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-shield-security zmdi-hc-fw"></i>Configuracion Cuenta<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="solicasesoria.html"> estado de cuenta</a>
						</li>
						<li>
							<a href="erro404.html">Eliminar mi cuenta</a>
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
			<ul class="full-box list-unstyled text-right">
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
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Panel de control <small>Administrador</small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">			
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Estudiantes Matriculados
				</div>
				<div class="full-box tile-icon text-center">
				<!--<i class="zmdi zmdi-face"></i>-->
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">40%</p>
					<small>Total</small>
				</div>
			</article>	
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">			
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Docente Registrado
				</div>
				<div class="full-box tile-icon text-center">
					<!--<i class="zmdi zmdi-face"></i>-->
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">20%</p>
					<small>Total</small>
				</div>
			</article>	
		</div>
	</section>
	<!-- Dialog help -->
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