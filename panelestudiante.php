<!DOCTYPE html>
<html lang="es">
<head>
	<title>Panel Estudiante</title>
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
				Matematicas Basica <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
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
					<a href="panelestudiante.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
					</i>Notas<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="matmateria.html"></i>Ver Notas</a>
						</li>
						<li>
							<a href="horario.html"></i>Notas Pendiente</a>
						</li>
					</ul>
				</li>
				<li>
				<a href="#!" class="btn-sideBar-SubMenu">
					</i>Examen<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="matmateria.html"></i>Realizar Examen</a>
						</li>
						<li>
							<a href="horario.html"></i>Examen Pendiente</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">Ver Horario</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">Ver Hoja de vida Estudiante</a>
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
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">1</span>
					</a>
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
			  <h1 class="text-titles">Panel de control <small>Estudiante</small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">			
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Finalizacion del Curso
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-face"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">70%</p>
					<small>Completado</small>
				</div>
			</article>	
		</div>
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificationes <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
						<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">5m</div>
				      	<h4 class="list-group-item-heading">Ingeniero Erney</h4>
				      	<p class="list-group-item-text">despues de las 2:00 PM habilito el curso</p>
				    </div>
			  	</div> 	
			</div>
		</div>
	</section>
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