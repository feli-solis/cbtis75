<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resultado</title>
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

<script type="text/javascript" src="jquery/jquery-1.10.2.js"></script> 
<link href="css/messages.css" rel="stylesheet" type="text/css">

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

<body>
<div class="wrapper color-one">
	<div class="container">
		<div class="sixteen columns">
			<nav>
				<ul>
					<li><a href="form.php">Inicio</a></li>
					<li><a href="consulta.php">Consulta</a></li>
					<li><a href="resultado.php">Resultados</a></li>
					<li><a href="registro_usuarios.php">Registro de Usuarios</a></li>
					<li><a href="exportarBase.php">Exportar Base de Datos</a></li>
				</ul>
			</nav>
			<hr class="remove-bottom" style="margin-top: 60px;"/>
			<h1 class="remove-bottom">CBTis 75</h1>
			<h5>Version 0.5</h5>
			<hr />
		<!-- </div> -->

<center>
<?php
session_start();
if(isset($_SESSION['acceso'])==1){
	
@$flag=$_POST['flag'];
@$criterios=$_POST['criterios'];
@$especialidad=$_POST['especialidad'];

echo '<form action="resultado.php" method="post">';
echo '<input type="hidden" value="1" name="flag">';

if($criterios==1 or $flag==0){
echo '<div class="three columns offset-by-five">';
echo '<label for="criterios">';
echo '<input type="checkbox" id="criterios" value="1" onClick="this.form.submit();" checked name="criterios">';
echo 'Criterios</label>';
echo '</div>';
}else{
echo '<div class="three columns offset-by-five">';
echo '<label for="criterios">';
echo '<input type="checkbox" id="criterios" value="1" onClick="this.form.submit();" name="criterios">';
echo 'Criterios</label>';
echo '</div>';
}
if($especialidad==1){
echo '<div class="four columns">';
echo '<label for="especialidadop">';
echo '<input type="checkbox" id="especialidadop" value="1" onClick="this.form.submit();" checked name="especialidad">';
echo 'Especialidad Opcional</label>';
echo '</div>';
}else{
echo '<div class="four columns">';
echo '<label for="especialidadop">';
echo '<input type="checkbox" id="especialidadop" value="1" onClick="this.form.submit();" name="especialidad">';
echo 'Especialidad Opcional</label>';
echo '</div>';
}

echo <<< HTML
 		</form>    
    <form action="funciones/ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
	    <div class="four columns offset-by-six">
	      <input type='button' name='imprimir' value='Imprimir' onclick='javascript:imprSelec("muestra")'> 
	      <input type="button" value="Exportar" class="botonExcel" /> 
				<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" /> 
				<input type="hidden" id="datos_a_enviar" name="doc" value='2'/> 
			</div>
		</form>
		<hr />
		
		<div id="muestra">
HTML;

$conexion=mysql_connect('localhost','root','');
mysql_select_db('cbtis75');
mysql_set_charset('utf8');
$registros=mysql_query('select 
				CONCAT(al.Apellido_Paterno," ",al.Apellido_Materno," ",al.Nombre) as Nombre ,
				al.Primera_Opcion as op,
				al.Segunda_Opcion as so,
				ad.Puntaje as Puntaje,
				al.sexo as Sexo,
				ad.Sexo_p as Sexpuntos,
				al.Edad as Edad,
				ad.Edad_p as Edadpuntos,
				ad.Ex_Admision as Examen1,
				ad.Test as Test1,
				ad.Ex_Matematicas as Examen2,
				ad.Ex_Mate as Test2,
				ad.Conducta as Conducta,
				al.Promedio_de_Secundaria as Promedio,
				ad.Promedio_Sec as secpuntos,
				al.Calle as Calle,
				al.Colonia as Colonia,
				ad.Zona as zona,
				ad.Induccion_Papas as ip,
				ad.Induccion_Alumnos as ia
				from alumnos as al
				join admision as ad 
				on al.Clave=ad.Clave 
				ORDER BY Puntaje desc,zona desc, Nombre asc ');
				echo '<center><h2>Puntaje de Alumnos</h2></center>';
				echo '<table border="1" id="Exportar_a_Excel">';
				echo '<tr>';
				
if($especialidad==1){
				echo "<td bgcolor='#666666' align='center' style='color: #ffffff;'>".'ESPECIALIDAD OPCIONAL'."</td>";
}
				echo "<td bgcolor='#666666' align='center' style='color: #ffffff;'>".'ESPECIALIDAD PRINCIPAL'."</td>";
					echo "<td bgcolor='#666666' align='center' style='color: #ffffff;'>".'NOMBRE DEL ASPIRANTE'."</td>";

if($criterios==1 or $flag==0){
					echo "<td bgcolor='#666666' colspan='2' align='center' style='color: #ffffff;'>".'SEXO'."</td>";
					echo "<td bgcolor='#666666' colspan='2' align='center' style='color: #ffffff;'>".'EDAD'."</td>";
					echo "<td bgcolor='#666666' colspan='2' align='center' style='color: #ffffff;'>".'TEST'."</td>";
					echo "<td bgcolor='#666666' colspan='2' align='center' style='color: #ffffff;'>".'EX MATE'."</td>";
					echo "<td bgcolor='#666666' colspan='2' align='center' style='color: #ffffff;'>".'CONDUCTA'."</td>";
					echo "<td bgcolor='#666666' colspan='2' align='center' style='color: #ffffff;'>".'SECUNDARIA'."</td>";
					echo "<td bgcolor='#666666' colspan='4' align='center' style='color: #ffffff;'>".'DOMICILIO'."</td>";
					echo "<td bgcolor='#666666' colspan='2' align='center' style='color: #ffffff;'>".'IP'."</td>";
					echo "<td bgcolor='#666666' colspan='2' align='center' style='color: #ffffff;'>".'IA'."</td>";
}
					echo "<td bgcolor='#666666' align='center' style='color: #ffffff;'>".'TOTAL'."</td><strong>";
				echo '</tr>';
				
				while($imprimir=mysql_fetch_array($registros)){
					echo '<tr>';
if($especialidad==1){
					echo "<td>".$imprimir['so']."</td>";
}
					echo "<td>".$imprimir['op']."</td>";
					echo "<td>".$imprimir['Nombre']."</td>";
					
if($criterios==1 or $flag==0){
					echo "<td>".$imprimir['Sexo']."</td>";
					echo "<td align='center'>".$imprimir['Sexpuntos']."</td>";
					echo "<td align='center'><b>".$imprimir['Edad']."</b></td>";
					echo "<td align='center'>".$imprimir['Edadpuntos']."</td>";
					echo "<td align='center'><b>".$imprimir['Examen1']."</b></td>";
					echo "<td align='center'>".$imprimir['Test1']."</td>";
					echo "<td align='center'><b>".$imprimir['Examen2']."</b></td>";
					echo "<td align='center'>".$imprimir['Test2']."</td>";
					
					
					if($imprimir['Conducta']==1){
						echo "<td align='center'><b>"."E"."</b></td>";
						}elseif($imprimir['Conducta']==0){
						echo "<td align='center'><b>"."B"."</b></td>";
						}if($imprimir['Conducta']==-1){
						echo "<td align='center'><b>"."R"."</b></td>";
						}
					echo "<td align='center'>".$imprimir['Conducta']."</td>";
					
					echo "<td align='center'><b>".$imprimir['Promedio']."</b></td>";
					echo "<td align='center'>".$imprimir['secpuntos']."</td>";
					
				
					echo "<td>".$imprimir['Calle']."</td>";
					echo "<td>".$imprimir['Colonia']."</td>";
						
					if($imprimir['zona']==2){
						echo "<td align='center'>"."R"."</td>";
						}elseif($imprimir['zona']==1){
						echo "<td align='center'>"."SU"."</td>";
						}if($imprimir['zona']==0){
						echo "<td align='center'>"."U"."</td>";
						}if($imprimir['zona']==-1){
						echo "<td align='center'>"."C"."</td>";
						}
					echo "<td align='center'>".$imprimir['zona']."</td>";
					
					
					if($imprimir['ip']==1){
						echo "<td align='center'>"."P"."</td>";
						}elseif($imprimir['ip']==0){
						echo "<td align='center'>"."A"."</td>";
						}if($imprimir['ip']==-1){
						echo "<td align='center'>"."NA"."</td>";
						}
					echo "<td align='center'>".$imprimir['ip']."</td>";
					
					if($imprimir['ia']==1){
						echo "<td align='center'>"."P"."</td>";
						}elseif($imprimir['ia']==0){
						echo "<td align='center'>"."A"."</td>";
						}if($imprimir['ia']==-1){
						echo "<td align='center'>"."NA"."</td>";
						}
					echo "<td align='center'>".$imprimir['ia']."</td>";
}

					echo "<td align='center'>".$imprimir['Puntaje']."</td>";
					
					echo "</tr>";
				}
		}else{
	echo <<< HTML
	<div class="cent2" align="center">
	<img src="img/decline.png" width="16" height="16"  alt=""/> No has iniciado sesion.
	</div>
	<meta http-equiv="refresh" content="3;URL=index.php">
HTML;
			
}
?>
</div>
</center>
</div><!-- sixteen columns -->
</div><!--container-->
</div><!--wrapper-->
</body>
</html>