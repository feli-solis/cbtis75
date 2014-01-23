<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exportando..</title>
</head>

<body>
<?php 
$conexion=mysql_connect('localhost','root','');
mysql_select_db('cbtis75');
mysql_set_charset('utf8');
$consulta=mysql_query('select * from alumnos');

header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=Consulta.xls"); 
header("Pragma: no-cache");
header("Expires: 0"); 

?>
<table border="1px">
<tr>
<td bgcolor="#999999">Clave</td>
<td bgcolor="#999999">Nombre</td>
<td bgcolor="#999999">Apellido Paterno</td>
<td bgcolor="#999999">Apellido Materno</td>
<td bgcolor="#999999">Sexo</td>
<td bgcolor="#999999">Edad</td>
<td bgcolor="#999999">Estado donde vive</td>
<td bgcolor="#999999">Municipio donde Vive</td>
<td bgcolor="#999999">Estado donde Nacio</td>
<td bgcolor="#999999">Municipio donde Nacio</td>
<td bgcolor="#999999">Peso</td>
<td bgcolor="#999999">Estatura</td>
<td bgcolor="#999999">Medida de la cintura</td>
<td bgcolor="#999999">Correo</td>
<td bgcolor="#999999">Calle</td>
<td bgcolor="#999999">Colonia</td>
<td bgcolor="#999999">Codigo Postal</td>
<td bgcolor="#999999">Fecha de nacimiento</td>
<td bgcolor="#999999">Municipio donde vive</td>
<td bgcolor="#999999">Curp</td>
<td bgcolor="#999999">Estado Civil</td>
<td bgcolor="#999999">Tipo Sanguineo</td>
<td bgcolor="#999999">Nombre del Padre</td>
<td bgcolor="#999999">Ocupacion del Padre</td>
<td bgcolor="#999999">Telefono del Padre</td>
<td bgcolor="#999999">Celular del Padre</td>
<td bgcolor="#999999">Distancia y tiempo a su Casa</td>
<td bgcolor="#999999">Transporte</td>
<td bgcolor="#999999">Costo del Transporte</td>
<td bgcolor="#999999">Nombre de Secundaria</td>
<td bgcolor="#999999">Municipio de Secundaria</td>
<td bgcolor="#999999">Estado de Secundaria</td>
<td bgcolor="#999999">Tipo de Secundaria</td>
<td bgcolor="#999999">Modalidad de Secundaria</td>
<td bgcolor="#999999">Regimen de Secundaria</td>
<td bgcolor="#999999">Promedio de Secundaria</td>
<td bgcolor="#999999">Boleta de secundaria</td>
<td bgcolor="#999999">Certificado de Secundaria</td>
<td bgcolor="#999999">Cedula de Aspirante SEG</td>
<td bgcolor="#999999">Primera Opcion</td>
<td bgcolor="#999999">Segunda Opcion</td>
<td bgcolor="#999999">Tercera Opcion</td>
<td bgcolor="#999999">Cuarta Opcion</td>
<td bgcolor="#999999">Quinta Opcion</td>
<td bgcolor="#999999">Sexta Opcion</td>
<td bgcolor="#999999">Septima Opcion</td>
</tr>
<?php
while($filap=mysql_fetch_array($consulta)){
echo <<<html
<tr>
<td>{$filap['Clave']}</td>
<td>{$filap['Nombre']}</td>
<td>{$filap['Apellido_Paterno']}</td>
<td>{$filap['Apellido_Materno']}</td>
<td>{$filap['Sexo']}</td>
<td>{$filap['Edad']}</td>
<td>{$filap['Municipio_Donde_Vive']}</td>
<td>{$filap['Estado_Donde_Vive']}</td>
<td>{$filap['Municipio_donde_Nacio']}</td>
<td>{$filap['Estado_donde_Nacio']}</td>
<td>{$filap['Peso']}</td>
<td>{$filap['Estatura']}</td>
<td>{$filap['Medida_de_la_Cintura']}</td>
<td>{$filap['Email']}</td>
<td>{$filap['Calle']}</td>
<td>{$filap['Colonia']}</td>
<td>{$filap['Codigo_Postal']}</td>
<td>{$filap['Fecha_de_Nacimiento']}</td>
<td>{$filap['Curp']}</td>
<td>{$filap['Estado_Civil']}</td>
<td>{$filap['Tipo_Sanguineo']}</td>
<td>{$filap['Nombre_del_Padre']}</td>
<td>{$filap['Ocupacion_del_Padre']}</td>
<td>{$filap['Telefono_del_Padre']}</td>
<td>{$filap['Celular_del_Padre']}</td>
<td>{$filap['Distancia_y_Tiempo_a_su_Casa']}</td>
<td>{$filap['Transporte']}</td>
<td>{$filap['Costo_del_transporte']}</td>
<td>{$filap['Nombre_de_Secundaria']}</td>
<td>{$filap['Domicilio_de_secundaria']}</td>
<td>{$filap['Municipio_de_Secundaria']}</td>
<td>{$filap['Estado_de_Secundaria']}</td>
<td>{$filap['Tipo_de_secundaria']}</td>
<td>{$filap['Modalidad_de_Secundaria']}</td>
<td>{$filap['Regimen_de_Secundaria']}</td>
<td>{$filap['Promedio_de_Secundaria']}</td>
<td>{$filap['Boleta_de_Secundaria']}</td>
<td>{$filap['Certificado_de_Secundaria']}</td>
<td>{$filap['Cedula_de_Aspirante_SEG']}</td>
<td>{$filap['Primera_Opcion']}</td>
<td>{$filap['Segunda_Opcion']}</td>
<td>{$filap['Tercera_Opcion']}</td>
<td>{$filap['Cuarta_Opcion']}</td>
<td>{$filap['Quinta_Opcion']}</td>
<td>{$filap['Sexta_Opcion']}</td>
<td>{$filap['Septima_Opcion']}</td>
</tr>

html;
	
	}
?>
</table> 
</body>
</html>