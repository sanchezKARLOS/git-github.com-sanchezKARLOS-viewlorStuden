<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body class="cover" >
	<div class="prim" id="prim1">
		<div class="segun" id="segun2">
			<div class="terc" id="terc3">
			<form action="validar.php" method="post" autocomplete="off" class="full-box logInForm" id="formindex">
		<p class="text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class=" text-muted text-uppercase">Iniciar sesión</p>
		<div class="form-group label-floating">
		  <label class="control-label" for="Id_Persona">Codigo Id</label>
		  <input class="form-control" id="Id_Persona" type="text" name="Id_Persona">
		  <p class="help-block">Escribe tú Id</p>
		</div>
		<div class="form-group label-floating">
		  <label class="control-label" for="Clave">Contraseña</label>
		  <input class="form-control" id="Clave" type="password" name="Clave">
		  <p class="help-block">Escribe tú contraseña</p>
		</div>
		<div class="form-group text-center">
			<input type="submit" value="Entrar" class="btn" id="btnid">
		</div>
		<div class="form-group text-center">
			<label class="control-label">¿No tienes cuenta?</label></br>
			<a href="registrarstudent.html">Contacta al Administrador!</a></h4>
			
		</div>
	</form>
			</div>
		</div>
	</div>
	
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script src="./js/pruebajs.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>