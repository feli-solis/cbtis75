<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Borrando..</title>
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
 
$consulta=mysql_query("Delete From alumnos where Clave='".$clave."'",$conexion);

$consulta2=mysql_query("Delete From admision where Clave='".$clave."'",$conexion);

   //Cerramos la base
   mysql_close($conexion);
  ?>
<div class="centrada">
<img src="../img/accept.png" width="16" height="16"  alt=""/> Registro Eliminado
<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=../consulta.php'>
<p>Redireccionando...</p>
</div>

</div>
</center>

</body>
</html>