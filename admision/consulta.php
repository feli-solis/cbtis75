<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Consulta</title>
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

	<script type="text/javascript" src="jquery/jquery-1.10.2.js"></script> 

	<script language="javascript"> 
	$(document).ready(function() { 
	     $(".botonExcel").click(function(event) { 
	     $("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html()); 
	     $("#FormularioExportacion").submit(); 
	}); 
	}); 
	</script>

	<script type="text/javascript">
	function imprSelec(muestra)
	{var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}
	</script>

</head>

<?php
session_start();
if(isset($_SESSION['acceso'])==1){

@$flag=$_POST['flag'];
@$buscar=$_POST['alumno'];
@$especialidad=$_POST['especialidad'];
@$nombre=$_POST['nombre'];
@$edad=$_POST['edad'];
@$sexo=$_POST['sexo'];
@$direccion=$_POST['direccion'];
$color=0;
if($buscar=="0"){
	$buscar="";
	}

echo <<< HTML
<body>
	
	<!-- Primary Page Layout
	================================================== -->
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
		</div>
		<div class="sixteen columns">
			<form method="post" action="consulta.php">
			<input type="hidden" value="1" name="flag">
			<div class="four columns offset-by-five">

				<input type="text" name="alumno" id="alumno" value="$buscar" class="remove-bottom" autofocus>
			</div><!--alumno-->
			<div class="two columns">
				<input type="submit" value="Buscar" class="remove-bottom">
			</div>

			<div class="clear"></div>

			<div class="three columns">
				<label for="especialidad">
HTML;
				
				if($especialidad==1 or $flag==0){
					echo '<input type="checkbox" name="especialidad" id="especialidad" value="1" checked onClick="this.form.submit();">';
				}else{
					echo '<input type="checkbox" name="especialidad" id="especialidad" value="1" onClick="this.form.submit();">';
				}
				echo <<< HTML
				Especialidad</label>
			</div>

			<div class="three columns">
				<label for="nombre">
HTML;
				if($nombre==1 or $flag==0){
					echo '<input type="checkbox" name="nombre" id="nombre" value="1" checked onClick="this.form.submit();">';
				}else{
					echo '<input type="checkbox" name="nombre" id="nombre" value="1" onClick="this.form.submit();">';
				}
				
				echo 'Nombre</label>';
			echo '</div>';

			echo '<div class="three columns">';
				echo '<label for="edad">';
				
				if($edad==1){
					echo '<input type="checkbox" name="edad" id="edad" value="1" checked onClick="this.form.submit();">';
				}else{
					echo '<input type="checkbox" name="edad" id="edad" value="1" onClick="this.form.submit();">';
				}
				
				echo <<< HTML
                Edad</label>
			 </div>

			<div class="three columns">
				<label for="sexo">
HTML;
				if($sexo==1){
					echo '<input type="checkbox" name="sexo" id="sexo" value="1" checked onClick="this.form.submit();">';
				}else{
					echo '<input type="checkbox" name="sexo" id="sexo" value="1" onClick="this.form.submit();">';
				}
				
                echo <<< HTML
				Sexo</label>
			</div>

			<div class="three columns">
				<label for="direccion">
HTML;
				
				if($direccion==1 or $flag==0){
					echo '<input type="checkbox" name="direccion" id="direccion" value="1" checked onClick="this.form.submit();">';
				}else{
					echo '<input type="checkbox" name="direccion" id="direccion" value="1" onClick="this.form.submit();">';
				}
				
                echo <<< HTML
				Dirección</label>
			</div>
			</form><!--form1-->

			<form action="funciones/ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
				<div class="four columns offset-by-six">	
					<input type='button' name='imprimir' value='Imprimir' onclick='javascript:imprSelec("muestra")'> 
	       	<input type="submit" value="Exportar" class="botonExcel" />
	       	<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" /> 
					<input type="hidden" id="datos_a_enviar" name="doc" value='1'/>
				</div>
			</form>
			<hr />
HTML;
		
$conexion=mysql_connect('mysql.hostinger.es','u859503001_azael','azaeldg');
mysql_select_db('u859503001_base',$conexion);
$consulta=mysql_query('select * 
from alumnos 
where Nombre like "%'.$buscar.'%" 
or Apellido_Paterno like "%'.$buscar.'%" 
or Apellido_Materno like "%'.$buscar.'%" 
or Sexo like "%'.$buscar.'%" 
or Edad like "%'.$buscar.'%" 
or Calle like "%'.$buscar.'%" 
or Colonia like "%'.$buscar.'%" 
or Estado_Donde_Vive like "%'.$buscar.'%" 
or Municipio_Donde_Vive like "%'.$buscar.'%"
or Primera_Opcion like "%'.$buscar.'%"
',$conexion);

if($direccion==1 or $edad==1 or $especialidad==1 or $flag==0 or $nombre==1 or $sexo==1){

echo "<div id='muestra'>";
echo '<center><h2>Lista de Alumnos</h2></center>';

echo '<table border="1" id="Exportar_a_Excel">';

echo '<tr>';

echo '<td bgcolor="#666666" align="center"></td>';

if($especialidad==1 or $flag==0){
echo '<td bgcolor="#666666" align="center" style="color: #ffffff;">ESPECIALIDAD</td>';
}
if($nombre==1 or $flag==0){
echo '<td bgcolor="#666666" align="center" style="color: #ffffff;"><b>NOMBRE</b></td>';
}
if($edad==1){
echo '<td bgcolor="#666666" align="center" style="color: #ffffff;"><b>EDAD</b></td>';
}
if($sexo==1){
echo '<td bgcolor="#666666" align="center" style="color: #ffffff;"><b>SEXO</b></td>';
}
if($direccion==1 or $flag==0){
echo '<td bgcolor="#666666" align="center" style="color: #ffffff;"><b>CALLE</b></td>';
echo '<td bgcolor="#666666" align="center" style="color: #ffffff;"><b>COLONIA</b></td>';
echo '<td bgcolor="#666666" align="center" style="color: #ffffff;"><b>ESTADO</b></td>';
echo '<td bgcolor="#666666" align="center" style="color: #ffffff;"><b>MUNICIPIO</b></td>';
}

echo '</tr>';

while($fila=mysql_fetch_array($consulta)){
	if($color==0){
	echo '<tr>';
		echo '<td>'.
			'<a href="funciones/comprobar_alumno.php?clave='.$fila['Clave'].'"><img src="img/decline.png"></a>'.
			'<a href="modificar_usuario.php?clave='.$fila['Clave'].'">'.'<img src="img/application_form_edit.png"></a>'.
		'</td>';
	
	if($especialidad==1 or $flag==0){
		echo '<td>'.$fila['Primera_Opcion'].'</td>';
	}
	if($nombre==1 or $flag==0){
		echo '<td>'.$fila['Apellido_Paterno']." ".$fila['Apellido_Materno']." ".$fila['Nombre'].'</td>';
	}
	if($edad==1){
		echo '<td>'.$fila['Edad'].'</td>';
	}
	if($sexo==1){
		echo '<td>'.$fila['Sexo'].'</td>';
	}
	if($direccion==1 or $flag==0){
		echo '<td>'.$fila['Calle'].'</td>';
		echo '<td>'.$fila['Colonia'].'</td>';
		echo '<td>'.$fila['Estado_Donde_Vive'].'</td>';
		echo '<td>'.$fila['Municipio_Donde_Vive'].'</td>';
		$color=1;
	}
	echo '</tr>';
	}else{
		echo '<tr>';
		echo '<td bgcolor="#CCCCCC">'.
			'<a href="funciones/comprobar_alumno.php?clave='.$fila['Clave'].'"><img src="img/decline.png"></a>'.
			'<a href="modificar_usuario.php?clave='.$fila['Clave'].'">'.'<img src="img/application_form_edit.png"></a>'.
		'</td>';
	
	if($especialidad==1 or $flag==0){
		echo '<td bgcolor="#CCCCCC">'.$fila['Primera_Opcion'].'</td>';
	}
	if($nombre==1 or $flag==0){
		echo '<td bgcolor="#CCCCCC">'.$fila['Apellido_Paterno']." ".$fila['Apellido_Materno']." ".$fila['Nombre'].'</td>';
	}
	if($edad==1){
		echo '<td bgcolor="#CCCCCC">'.$fila['Edad'].'</td>';
	}
	if($sexo==1){
		echo '<td bgcolor="#CCCCCC">'.$fila['Sexo'].'</td>';
	}
	if($direccion==1 or $flag==0){
		echo '<td bgcolor="#CCCCCC">'.$fila['Calle'].'</td>';
		echo '<td bgcolor="#CCCCCC">'.$fila['Colonia'].'</td>';
		echo '<td bgcolor="#CCCCCC">'.$fila['Estado_Donde_Vive'].'</td>';
		echo '<td bgcolor="#CCCCCC">'.$fila['Municipio_Donde_Vive'].'</td>';
	}
	echo '</tr>';
		$color=0;
		}
	}
	}
echo '</table>';
echo '</div>';
echo '<br>';
}else{
	
echo <<< HTML
	<div class="cent2" align="center">
	<img src="img/decline.png" width="16" height="16"  alt=""/> No has iniciado sesion.
	</div>
	<meta http-equiv="refresh" content="3;URL=index.php">
HTML;
	
	}
?> </font>


    </center>
   

</font>
	<hr />
	</div><!--sixteen columns-->
	</div><!-- container -->
</body>
</html>