<!DOCTYPE html>
<html lang="es">
<head>
	<title>Teacher</title>
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
				Matematica Basica <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
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
				  <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Editar Docente </br> 
					<!--<small>Editar Perfil</small></h1>-->
				</div>
			</div>
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active in" id="new">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-md-10 col-md-offset-1">
<form action="teacherdb.php" class="from" id="from" method="POST" onsubmit="return checkStuff()">
<div class="inblcdiv1 inblcdiv2">
<div class="regforblock">
<label for="id" id="labelid">Codigo Id
<input type="text" name="id" id="id" placeholder="Id." onblur="reviscodigo();" onkeypress="solonumero(event);"  maxlength="10" require></label>
</div>
</div>

<div class="inblcdiv1 inblcdiv2">
<div class="regforblock">
<label for="nombre" id="labelnombre">Nombre
<input type="text" name="nombre" id="nombre" placeholder="Ej: Andres." onfocus="vaciarplaceholder(this);" onkeypress="revisnombre(event);" pattern=".{3,15}" required ></label>
</div>
</div>

   <div class="inblcdiv1 inblcdiv2">
   <div class="regforblock">
    <label for="apellido" id="labelapellido">Apellido
    <input type="text" name="apellido" id="apellido" placeholder="Ej: Carvajal." onfocus="vaciarplaceholder(this);" pattern=".{3,15}" required></label>
</div>
</div>
<div class="inblcdiv1 inblcdiv2">
   <div class="regforblock">
   <label for="tipoaep" id="labelrol">Tipo de rol
   <select name="id" id="Id_Roles" class="tipoaep" required>
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
    </select></label>
</div>
</div>

<div class="inblcdiv1 inblcdiv2">
<div class="regforblock">
<label for="clave"id="labelclave">Ingrese Contraseña
<input type="password" name="clave" id="clave" placeholder="Contraseña." maxlength="15"; required></label>
</div>
</div>
<br><br>
<p class="text-center">
<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
</p>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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