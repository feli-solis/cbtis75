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
<link href="../css/messages.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
@session_start();
if(@$_SESSION['acceso']==1){

if(@$_POST['clave']!=NULL){
//Conectar con servidor
$conexion=mysql_connect('mysql.hostinger.es','u859503001_azael','azaeldg') or die('Ups Algun dato esta incorrecto');

//Conectar con la base
mysql_select_db('u859503001_base',$conexion);	

//Crear el Insert
$insert="UPDATE alumnos
SET
Nombre='".$_POST['nombre']."',
Apellido_Paterno='".$_POST['apellidop']."',
Apellido_Materno='".$_POST['apellidom']."',
Sexo='".$_POST['sexo']."',
Edad='".$_POST['edad']."',
Municipio_Donde_Vive='".$_POST['municipio']."',
Estado_Donde_Vive='".$_POST['estado']."',
Municipio_donde_Nacio='".$_POST['municipion']."',
Estado_donde_Nacio='".$_POST['estadon']."',
Peso='".$_POST['peso']."',
Estatura='".$_POST['estatura']."',
Medida_de_la_Cintura='".$_POST['cintura']."',
Email='".$_POST['email']."',
Calle='".$_POST['calle']."',
Colonia='".$_POST['colonia']."',
Codigo_Postal='".$_POST['cp']."',
Fecha_de_Nacimiento='".$_POST['day']."/".$_POST['month']."/".$_POST['year']."',
Curp='".$_POST['curp']."',
Estado_Civil='".$_POST['estadoc']."',
Tipo_Sanguineo='".$_POST['tsanguineo'].$_POST['rh']."',
Nombre_del_Padre='".$_POST['nombrep']."',
Ocupacion_del_Padre='".$_POST['ocupacion']."',
Telefono_del_Padre='".$_POST['tel']."',
Celular_del_Padre='".$_POST['cel']."',
Distancia_y_Tiempo_a_su_Casa='".$_POST['tiempo']." / ".$_POST['distancia']."',
Transporte='".$_POST['transporte']."',
Costo_del_transporte='".$_POST['costo']."',
Nombre_de_Secundaria='".$_POST['nombresec']."',
Domicilio_de_secundaria='".$_POST['domiciliosec']."',
Municipio_de_Secundaria='".$_POST['municipiosec']."',
Estado_de_Secundaria='".$_POST['estadosec']."',
Tipo_de_secundaria='".$_POST['tiposec']."',
Modalidad_de_Secundaria='".$_POST['modalidadsec']."',
Regimen_de_Secundaria='".$_POST['regimensec']."',
Promedio_de_Secundaria='".$_POST['promedio']."',
Boleta_de_Secundaria='".$_POST['boleta']."',
Certificado_de_Secundaria='".$_POST['certificado']."',
Primera_Opcion='".$_POST['carrera1']."',
Segunda_Opcion='".$_POST['carrera2']."',
Tercera_Opcion='".$_POST['carrera3']."',
Cuarta_Opcion='".$_POST['carrera4']."',
Quinta_Opcion='".$_POST['carrera5']."',
Sexta_Opcion='".$_POST['carrera6']."',
Septima_Opcion='".$_POST['carrera7']."'
WHERE Clave='".$_POST['clave']."'
";


//Ejecutar el insert
mysql_query($insert) or die(mysql_error());


//Cerramos la base
mysql_close($conexion);

echo <<<html

		<div class="centrada"><center>
		<img src="../img/accept.png" width="16" height="16"  alt=""/> Listo
		<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=../consulta.php'>
		<meta http-equiv=Cache-Control CONTENT=no-cache>
		<meta http-equiv=Pragma CONTENT=no-cache>
		!!
		</center>
		</div>
html;

}else{
echo <<< HTML
	<div class="cent2" align="center">
	<img src="../img/decline.png" width="16" height="16"  alt=""/> No hay registro seleccionado.
	</div>
	<meta http-equiv="refresh" content="3;URL=../modificar_usuario.php">
HTML;
}


}else{
echo <<< HTML
	<div class="cent2" align="center">
	<img src="../img/decline.png" width="16" height="16"  alt=""/> No has iniciado sesion.
	</div>
	<meta http-equiv="refresh" content="3;URL=../index.php">
HTML;
}
?>

</body>
</html>