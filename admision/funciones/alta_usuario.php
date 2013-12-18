<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alta</title>
<link href="../css/messages.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
@session_start();
if(@$_SESSION['prioridad']==2){
	
	if(@$_POST['nombre']!=NULL and @$_POST['contrasena']!=NULL and @$_POST['correo']!=NULL and @$_POST['tipo']!=NULL){
			
		  //Conectamos con el Servidos
		  $conexion=mysql_connect('mysql.hostinger.es','u859503001_azael','azaeldg') or die('Ups Algun dato esta incorrecto');
		  
		  //Seleccionamos la base de Datos
		  mysql_select_db('u859503001_base',$conexion);
		  
		  //Preparamos el Insert
		  $insert="INSERT INTO usuarios(nombre,contrasena,Correo,prioridad) VALUES ('".@$_POST['nombre']."','".@$_POST['contrasena']."','".@$_POST['correo']."','".@$_POST['tipo']."')";
		  
			//Lo Registramos
		   mysql_query($insert) or die(mysql_error());
		   
		   //Cerramos la base
		   mysql_close($conexion);
		
			//Estoy recibiendo el formulario, compongo el cuerpo 
			$cuerpo = "Registro\n"; 
			$cuerpo .= "Usuario: " . @$_POST["nombre"] . "\n"; 
			$cuerpo .= "Contraseña: " . @$_POST["contrasena"] . "\n"; 
			$cuerpo .= "Correo: " . @$_POST["correo"] . "\n"; 
		
			//mando el correo... 
			@mail($_POST["correo"],'Registro',$cuerpo);
			
			echo <<< HTML
			<div class="centrada">
			<img src="../img/accept.png" width="16" height="16"  alt=""/> Registro insertado Correctamente
			<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=../registro_usuarios.php'>
			<p>Redireccionando...</p>
			</div>
		
HTML;
			}else{
				echo <<< HTML
				<div class="cent2" align="center">
				<img src="../img/decline.png" width="16" height="16"  alt=""/> Debes llenar todos los campos<br>
				<input type="submit" onclick="history.back()" value="Volver">
				
				</div>

HTML;
				
				}
	
}else{
	echo <<< HTML
	<div class="cent2" align="center">
	<img src="../img/decline.png" width="16" height="16"  alt=""/> Debes logearte como administrador antes de continuar
	<meta http-equiv="refresh" content="2;URL=../index.php">
	</div>

HTML;
}

?>
  
</body>
</html>