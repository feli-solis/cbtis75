<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de Usuarios</title>
	<meta name="author" content="Edgar Azael Deanda González, Luis Felipe Solís Enríquez">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="css/messages.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
</head>

<body>
<?php
session_start();
if(@$_SESSION['prioridad']==2){
echo <<< HTML
	<div class="wrapper color-one">
		<div class="container">
			<div class="sixteen columns">
				<nav>
				<ul>
					<li><a href="form.php">Inicio</a></li>
					<li><a href="consulta.php">Consulta</a></li>
					<li><a href="resultado.php">Resultados</a></li>
					<li><a href="registro_usuarios.php">Registro de Usuarios</a></li>
				</ul>
			</nav>
			<hr class="remove-bottom" style="margin-top: 60px;"/>
			<h1 class="remove-bottom">CBTis 75</h1>
			<h5>Version 0.5</h5>
			<hr />

			<div class="one-third column offset-by-six">
				<form method="post" action="funciones/alta_usuario.php">
					<label for="nombre">Nombre de Usuario</label>
					<input type="text" name="nombre" id="nombre">
					<label for="contrasena">Contraseña</label>
					<input type="password" name="contrasena" id="contrasena">
					<label for="correo">Correo Electrónico</label>
					<input type="text" name="correo" id="correo">
					<label for="tipo">Permisos</label>
					<select name="tipo" id="tipo">
						<option value="1">Usuario</option>
						<option value="2">Administrador</option>
					</select>
					<input type="submit" value="Aceptar">
				</form>
			</div>
			<hr />
			</div>
		</div>
	</div>
HTML;
}else{
	echo <<< HTML
	<div class="cent2" align="center">
	<img src="img/decline.png" width="16" height="16"  alt=""/> Debes iniciar sesión como administrador antes de continuar
	<meta http-equiv="refresh" content="2;URL=index.php">
	</div>
HTML;
}
?>
</body>
</html>