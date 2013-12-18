<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="description" content="">
	<meta name="author" content="Edgar Azael Deanda González; Luis Felipe Solís Enríquez">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" href="css/style.css">

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
if(session_start()){
	session_destroy();
	}
?>
	
	<!-- Primary Page Layout
	================================================== -->
	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">CBTis 75</h1>
			<h5>Version 0.5</h5>
			<hr />
		</div>
		<div class="one-third column offset-by-six">
			<form method="post" action="form.php">
			<label for="user">Usuario</label>
			<input type="text" name="user" id="user">
			<label for="pass">Contraseña</label>
			<input type="password" name="pass" id="pass">
			<input name="flag" type="hidden" value="0" />
			<input type="submit" value="Acceder">
			</form>
		</div>
		<hr />
	</div><!-- container -->
</body>
</html>