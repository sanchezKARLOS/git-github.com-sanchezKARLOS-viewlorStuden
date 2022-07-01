<?php
session_start();
$P_Nombre=$_SESSION['P_Nombre'];
if(!isset($_SESSION['Id_Roles'])){
	header("location: index.php");
}
else{
	if($_SESSION['Id_Roles'] !=3){
		header("location: index.php");
	}
}
?>
	
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Quiz test</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title"><small>Bienvenido <?php echo $P_Nombre; ?></small></div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box"><img src="./img/user1.png" alt="UserIcon">
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
					<a href="PIntroduccionNumeros.php">
						</i>Introduccion a los Numeros
					</a>
				</li>
				<li>
					<a href="PIntroduccionSuma.php">
						</i>Introduccion a la Suma
					</a>
				</li>
				<li>
					<a href="PIntroduccionResta.php">
						</i>Introduccion a la Resta
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
					<a href="logutup.php" class="btn-exit-system">
						<i class="zmdi zmdi-power"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Realizar <small>Test Quiz</small></h1>
			</div>
		</div>
		<!--<div>
		</div>-->
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
