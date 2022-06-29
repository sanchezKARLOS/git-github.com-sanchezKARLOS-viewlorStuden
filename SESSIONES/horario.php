<!DOCTYPE html>
<html lang="es">
<head>
	<title>Horario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/horario.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Universidad Popular Del Cesar <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
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
			<ul class="full-box list-unstyled ">
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
				  <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Horario Asignado</br> 
					<small>Horario de clase</small></h1>
				</div>
			
				<table class="cal">
					<caption>curso 2022-1</caption>
					<thead>
					  <tr>
						<th> Horas/dias </th>
						<th>Lunes</th>
						<th>Martes</th>
						<th>Miercoles</th>
						<th>Jueves</th>
						<th>Viernes</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td class="horas">8:00 AM a 10:00 AM </td>
						<td class="Mates">#<span> no hay horario </span></td>
						<td class="Lengua"># <span>no hay horario </span></td>
						<td class="Fyq">#<span> no hay horario </span></td>
						<td class="Mates">#<span>no hay horario </span> </td>
						<td class="Edfisica">#<span> no hay horario</span> </td>
					  </tr>
					  <tr>
						<td class="horas">10:00 AM a 12:00 M</td>
						<td class="Ingles">#<span>no hay horario  </span></td>
						<td class="Mates">#<span>  no hay horario</span></td>
						<td class="Musica">#<span> no hay horario</span></td>
						<td class="Econo">#<span>  no hay horario</span></td>
						<td class="Lengua">#<span> no hay horario </span></td>
					  </tr>
					  <tr>
						<td class="horas">12:00 M a 1:00 PM </td>
						<td class="Lengua">#<span>no hay horario</span></td>
						<td class="Mates">#<span>no hay horario </span></td>
						<td class="Lengua">#<span>no hay horario /span></td>
						<td class="Ingles">Sistemas Operativo<span> Aula 12 </span></td>
						<td class="Mates">#<span>no hay horario  </span></td>
					  </tr>
					  <tr>
						<td class="horas">1:00 PM a 2:00 PM</td>
						<td class="recreo">#<span> Descanso</span></td>
						<td class="recreo">#<span> Descanso</span></td>
						<td class="recreo">#<span>Descanso</span></td>
						<td class="recreo">#<span> Descanso</span></td>
						<td class="recreo">#<span> Descanso</span></td>
					  </tr>
					  <tr>
						<td class="horas">2:00 PM a 4:00 PM </td>
						<td class="Mates">Sistemas Operativo<span> Aula  112</span></td>
						<td class="Musica">#<span> no hay horario  </span></td>
						<td class="Lengua">#<span>no hay horario</span></td>
						<td class="Econo">#<span>no hay horario </span></td>
						<td class="Mates">#<span>no hay horario  </span></td>
				
					  </tr>
					  <tr>
						<td class="horas">4:00 PM a 6:00 PM</td>
						<td class="Mates">#<span>no hay horario</span></td>
						<td class="Tecno">Estructura de datos<span>Aula 112</span></td>
						<td class="Lengua">Software II<span> Aula redes </span></td>
						<td class="Tecno"><span>no hay horario</span></td>
						<td class="Mates">Redes & Investigacion<span> laboratorio</span></td>
					  </tr>
					 
				
					</tbody>
				
				  </table>
			</div>

	
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