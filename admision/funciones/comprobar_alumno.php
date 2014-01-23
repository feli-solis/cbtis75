<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Comprobar</title>
<link href="../css/messages.css" rel="stylesheet" type="text/css">
<style type="text/css">
body,td,th {
	color: #333;
}
</style>
</head>

<body>
<center>
<div id="cuerpo">
<?php
echo "<br><br><br><br><br><br><br>";
$clave=$_GET['clave'];

  //Conectamos con el Servidos
  $conexion=mysql_connect('localhost','u58905_Mario','Mario114mas') or die('Ups Algun dato esta incorrecto');
  
  //Seleccionamos la base de Datos
  mysql_select_db('u58905_cbtis75',$conexion);
 
$consulta=mysql_query("select * from alumnos where clave='".$clave."'",$conexion);

while($registro=mysql_fetch_array($consulta)){	
			  echo '<div class="cent2">';
  			  echo '<img src="../img/check_error.png" width="16" height="16"  alt=""/>Seguro que desea eliminar el registro '.$registro['Clave'].', '.$registro['Nombre'].' '.$registro['Apellido_Paterno'].' '.$registro['Apellido_Materno'].'';
			  echo '<br><br><a href="../consulta.php" class="boton2">Cancelar</a> ';
			  echo " <a href='borrar_alumno.php?clave=".$registro['Clave']."' class='boton2'>Borrar</a>";
			  echo "</div>";
		}
		  
   //Cerramos la base
   mysql_close($conexion);
  ?>
</div>
</center>

</body>
</html>