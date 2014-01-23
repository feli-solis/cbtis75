<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alta</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-color: #FFF;
}
</style>
</head>

<body>
<?php
//Conectar con servidor
$conexion=mysql_connect('localhost','u58905_Mario','Mario114mas') or die('Ups Algun dato esta incorrecto');

//Conectar con la base
mysql_select_db('u58905_cbtis75',$conexion);	
mysql_set_charset('utf8');

//Crear el Insert
$insert="INSERT INTO alumnos(
Nombre,
Apellido_Paterno,
Apellido_Materno,
Sexo,
Edad,
Municipio_Donde_Vive,
Estado_Donde_Vive,
Municipio_donde_Nacio,
Estado_donde_Nacio,
Peso,
Estatura,
Medida_de_la_Cintura,
Email,
Calle,
Colonia,
Codigo_Postal,
Fecha_de_Nacimiento,
Curp,
Estado_Civil,
Tipo_Sanguineo,
Nombre_del_Padre,
Ocupacion_del_Padre,Telefono_del_Padre,
Celular_del_Padre,
Distancia_y_Tiempo_a_su_Casa,
Transporte,
Costo_del_transporte,
Nombre_de_Secundaria,
Domicilio_de_secundaria,
Municipio_de_Secundaria,
Estado_de_Secundaria,
Tipo_de_secundaria,
Modalidad_de_Secundaria,
Regimen_de_Secundaria,
Promedio_de_Secundaria,
Boleta_de_Secundaria,
Certificado_de_Secundaria,
Cedula_de_Aspirante_SEG,
Primera_Opcion,
Segunda_Opcion,
Tercera_Opcion,
Cuarta_Opcion,
Quinta_Opcion,
Sexta_Opcion,
Septima_Opcion) 
VALUES (
'".$_POST['nombre']."',
'".$_POST['apellidop']."',
'".$_POST['apellidom']."',
'".$_POST['sexo']."',
'".$_POST['edad']."',
'".$_POST['municipio']."',
'".$_POST['estado']."',
'".$_POST['municipion']."',
'".$_POST['estadon']."',
'".$_POST['peso']."',
'".$_POST['estatura']."',
'".$_POST['cintura']."',
'".$_POST['email']."',
'".$_POST['calle']."',
'".$_POST['colonia']."',
'".$_POST['cp']."',
'".$_POST['day']."/".$_POST['month']."/".$_POST['year']."',
'".$_POST['curp']."',
'".$_POST['estadoc']."',
'".$_POST['tsanguineo'].$_POST['rh']."',
'".$_POST['nombrep']."',
'".$_POST['ocupacion']."',
'".$_POST['tel']."',
'".$_POST['cel']."',
'".$_POST['tiempo'].$_POST['tiempo_unidad']." / ".$_POST['distancia']." km',
'".$_POST['transporte']."',
'".$_POST['costo']."',
'".$_POST['nombresec']."',
'".$_POST['domiciliosec']."',
'".$_POST['municipiosec']."',
'".$_POST['estadosec']."',
'".$_POST['tiposec']."',
'".$_POST['modalidadsec']."',
'".$_POST['regimensec']."',
'".$_POST['promedio']."',
'".$_POST['boleta']."',
'".$_POST['certificado']."',
'".$_POST['cedula']."',
'".$_POST['carrera1']."',
'".$_POST['carrera2']."',
'".$_POST['carrera3']."',
'".$_POST['carrera4']."',
'".$_POST['carrera5']."',
'".$_POST['carrera6']."',
'".$_POST['carrera7']."'
)";

//Ejecutar el insert
mysql_query($insert) or die('error al insertar');

//Consultar el index de alumnos
$rs = mysql_query('SELECT AUTO_INCREMENT as clave FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "u58905_cbtis75" 
AND TABLE_NAME = "alumnos"',$conexion);
$valor=mysql_result($rs,0)-1;

//Creamos el insert de admision
$insert2="INSERT INTO admision(clave,Conducta,Induccion_Alumnos,Induccion_Papas) VALUES ('".$valor."',-1,-1,-1)";

//jecutamos el Segundo insert
mysql_query($insert2) or die('error al insertar');

//Cerramos la base
mysql_close($conexion);

//header('location: imprimir.php?$_POST["curp"]');
?>

<div class="centrada"><center>
<img src="img/accept.png" width="16" height="16"  alt=""/> Listo
<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=imprimir.php?curp=<?php echo $_POST["curp"];?>'>
<meta http-equiv=Cache-Control CONTENT=no-cache>
<meta http-equiv=Pragma CONTENT=no-cache>
!!
</center>
</div>
</body>
</html>