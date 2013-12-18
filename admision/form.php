<!doctype html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Formulario</title>
	<meta name="description" content="">
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
    
    
    <!-- Funcion para detectar si se presiono enter en una text y refrescar el form -->
    <script type="text/javascript">
	function testForEnter() 
	{    
		if (event.keyCode == 13) 
		{        
			document.forms["formulario"].submit();
		}
	} 
	
	<!-- Funcion para capturar y almacenar la variable del registro que se actualizara en la base -->
	function Enviar() {
    			document.formulario.Names.value = document.formulario.Nombre.value;		
	}
	
	<!-- Funcion que determina el numero de index en la lista y convertirla en en una lista circular con el boton -->
	function combofunction(){
	 <?php
	 $conexion=mysql_connect('mysql.hostinger.es','u859503001_azael','azaeldg') or die('Conexion interrumpida');
	 mysql_select_db('u859503001_base',$conexion);
	 $buscar=mysql_query('select * from alumnos',$conexion);
	 $contador=0;
	 while($contar=mysql_fetch_array($buscar)){
		 $contador=$contador+1;
		 }
	 ?>
	 
	 var control="<?php echo  $contador;?>";
	 if(document.formulario.Nombre.selectedIndex<control-1){
	 document.formulario.Nombre.selectedIndex=document.formulario.Nombre.selectedIndex+1;
	 }
	 else{
	 document.formulario.Nombre.selectedIndex =0;
	 }
	 document.formulario.submit();
	 
	}
	</script>
    

</head>

<body onLoad="Enviar()">

	<!-- Primary Page Layout
	================================================== -->
            
            <?php
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
		</div>
    
    <div class="sixteen columns">
		<form name="formulario" action="form.php" method="post">
HTML;
			
			session_start();
			echo '<div class="eight columns">';
				
				//Conectamos con el servidor (servidor,user,pass)
				$conexion=mysql_connect('mysql.hostinger.es','u859503001_azael','azaeldg') or die('Conexion interrumpida');
		
				//Seleccionamos la base de datos u859503001_base
				mysql_select_db('u859503001_base',$conexion);
				
			
				//creea una consulta para acceder comparando el usuario y contraseña en la tabla usuarios
				$consultacces=mysql_query('select nombre,contrasena,prioridad from usuarios',$conexion);
				$xacces=0;
				
				while($accest=mysql_fetch_array($consultacces)){
					if(@$_POST['user']==$accest['nombre'] and @$_POST['pass']==$accest['contrasena']){
						@$xacces=1;
						@$_SESSION['acceso']=1;
						@$_SESSION['prioridad']=$accest['prioridad'];
						}
					}
				
				//Comprobacion de acceso a form con usuario y contraseña o bandera de acceso "true"
				if($xacces=='1' or @$_POST['flag']=='1'or @$_SESSION['acceso']==1){
					
				//Consulta simple para llenar el <select> de los nombres con un ciclo
				$consulta=mysql_query('select CONCAT(al.Apellido_Paterno," ",al.Apellido_Materno," ",al.Nombre) as Nombre 
				from alumnos as al
				join admision as ad 
				on al.Clave=ad.Clave 
				ORDER BY Nombre asc' ,$conexion);
		
		
				//Determina si ya tiene acceso al formulario y se ha seleccionado un nombre del <select> o no para llamar sus campos
				if(@$_POST['flag']=='1')
				{
					
				//Asigna valor a la edad para actualizarla
					if($_POST['Edad']>=20){
						$edad=-1;
						}
					elseif($_POST['Edad']>=16){
						$edad=0;
						}
					elseif($_POST['Edad']>=13){
						$edad=1;
						}
						
				//Asigna valor a examen de admision para actualizarlo
						
					if($_POST['Ex_Admision']<=3){
						$test=-1;
						}
					elseif($_POST['Ex_Admision']<=5){
						$test=0;
						}
					elseif($_POST['Ex_Admision']<=10){
						$test=1;
						}
				
				//Asigna valor a examen de admision para actualizarlo
						
					if($_POST['Ex_Matematicas']<=5){
						$ex=-1;
						}
					elseif($_POST['Ex_Matematicas']<=9){
						$ex=0;
						}
					elseif($_POST['Ex_Matematicas']<=10){
						$ex=1;
						}
				//Asigna puntaje al promedio de secundaria para actualizarlo
					if($_POST['Promedio_Sec']<=5){
						$sec=-1;
						}
					elseif($_POST['Promedio_Sec']<=9){
						$sec=0;
						}
					elseif($_POST['Promedio_Sec']<=10){
						$sec=1;
						}
				
						
					//Actualiza los datos de el alumno
					$update="UPDATE admision as ad
						join alumnos as al
						on ad.Clave=al.Clave
						SET ad.Ex_Admision = '".$_POST['Ex_Admision']."',
						ad.Sexo_p = '".$_POST['Sexo']."',
						ad.Edad_p = '".$edad."',
						ad.Promedio_Sec= '".$sec."',
						ad.Test = '".$test."',
						ad.Zona = '".$_POST['Zona']."',
						ad.Ex_Mate = '".$ex."',
						ad.Ex_Matematicas = '".$_POST['Ex_Matematicas']."',
						ad.Conducta = '".$_POST['Conducta']."', 
						ad.Induccion_Alumnos = '".$_POST['Induccion_Alumnos']."', 
						ad.Induccion_Papas = '".$_POST['Induccion_Papas']."',
						al.Promedio_de_Secundaria='".$_POST['Promedio_Sec']."'
						where CONCAT( al.Apellido_Paterno,' ',al.Apellido_Materno,' ',al.Nombre) like '%".$_POST['Names']."%'";
						
					//Lo Registramos
  					 mysql_query($update) or die('error al insertar');
					 
					 $update2="UPDATE admision as ad
					    SET
						ad.Puntaje=(ad.Zona+ad.Conducta+ad.Induccion_Alumnos+ad.Induccion_Papas+ad.Test+ad.Ex_Mate+ad.Sexo_p+ad.Edad_p+ad.Promedio_Sec)";
					 mysql_query($update2) or die('error al insertar');
					 
					 
					//consulta para cargar los datos de un alumno en especifico 
					$consulta2=mysql_query('
					select 
					al.Sexo as Sexo, 
					al.Edad as Edad,
					ad.Ex_Admision as Examen1, 
					ad.Ex_Matematicas as Examen2, 
					ad.Conducta as Conducta,
					ad.Induccion_Alumnos as Inducciona, 
					ad.Induccion_Papas as Induccionp, 
					ad.Zona as Zona, 
					CONCAT(al.Calle," COLONIA ",al.Colonia) as Direccion, al.Promedio_de_Secundaria as Promedio  
					from alumnos as al
					join admision as ad
					on al.Clave=ad.Clave 
					where CONCAT( al.Apellido_Paterno," ",al.Apellido_Materno," ",al.Nombre) like "%'.$_POST['Nombre'].'%"  
					ORDER BY al.Apellido_Paterno asc LIMIT 1
					' ,$conexion);
					
					
				}else{
					
					//consulta para llenar los campos del primer alumno encontrado (Primera vez de cargar el form)
					$consulta2=mysql_query('
					select 
					al.Sexo as Sexo, 
					al.Edad as Edad,
					ad.Ex_Admision as Examen1, 
					ad.Ex_Matematicas as Examen2, 
					ad.Conducta as Conducta,
					ad.Induccion_Alumnos as Inducciona, 
					ad.Induccion_Papas as Induccionp,
					ad.Zona as Zona, 
					CONCAT(al.Calle," COLONIA ",al.Colonia) as Direccion, 
					al.Promedio_de_Secundaria as Promedio  
					from alumnos as al
					join admision as ad
					on al.Clave=ad.Clave 
					ORDER BY al.Apellido_Paterno asc LIMIT 1
					' ,$conexion);
				}
		
				//Label nombre alumno//
				echo '<label for="Nombre">Nombre</label>'.'<select name="Nombre" id="Nombre" onBlur="return Enviar()" onFocus="return Enviar()" onchange="this.form.submit()" autofocus>';
		 
				//Hacemos un ciclo que recorrera los registros en un arreglo para ponerlos en el <select>//
				 while($registro=mysql_fetch_array($consulta)){
						 if($registro['Nombre']==$_POST['Nombre']){
								 echo "<option value='".$registro['Nombre']."' selected>".$registro['Nombre']."</option>";
						 }else{
								 echo "<option value='".$registro['Nombre']."'>".$registro['Nombre']."</option>";
						 }
				 }
				echo "</select>";
				
				echo '<input name="Names" type="hidden" value="" />';
				echo '<input name="flag" type="hidden" value="1" />';
				echo '<input name="user" type="hidden"/>';
		
				//cerramos la base de datos//
				mysql_close($conexion);
				
				echo '</div>';
                echo '<div class="two columns">';
                echo '<label>&nbsp;</label>';
				echo '<input type="button" value="Siguiente" onClick="combofunction();">';
            echo '</div>';  
			  

            echo '<div class="two columns">';
				echo '<label for="Sexo">Sexo</label>';
				echo '<select name="Sexo" id="Sexo">';
				
		 	while($registro=mysql_fetch_array($consulta2)){
				
			//Muestra el sexo de el alumno seleccionado
				if($registro['Sexo']=="Hombre" or $registro['Sexo']==""){
					echo '<option value="0" selected>Hombre</option>';
				}elseif($registro['Sexo']=="Mujer"){
					echo '<option value="1" selected>Mujer</option>';
				}
				echo '</select>';
			echo '</div>';
			
            echo '<div class="two columns">';
                echo '<label for="Edad">Edad</label>';
			   
					
			    //Carga la edad del alumno seleccionado
				echo '<input type="text" name="Edad" id="Edad" value="'.$registro['Edad'].'">';
			echo '</div>';
			
			echo '<div class="ten columns">';
			
				
				echo '<label for="Direccion">Dirección</label>';
				
				//Carga la direccion del alumno seleccionado//
				if($registro['Direccion']==" COLONIA "){
				echo '<input type="text" name="Direccion" id="Direccion" placeholder="NO HAY DIRECCION" onKeyUp="this.value=this.value.toUpperCase();" disabled>';
				}else{
				echo '<input type="text" name="Direccion" id="Direccion" value="'.$registro['Direccion'].'" onKeyUp="this.value=this.value.toUpperCase();" disabled>';
				}
			echo '</div>';

				//Zona donde vive el alumno segun su direccion
            echo '<div class="four columns">';
                echo '<label>Zona</label>';
                echo '<select name="Zona" id="Zona">';
				
				if($registro['Zona']==-1){
                    echo '<option value="-1" selected>Centro</label>';
                    echo '<option value="0">Urbana</label>';
                    echo '<option value="1">Suburbana</label>';
                    echo '<option value="2">Rural</label>';
					}
				if($registro['Zona']==0){
                    echo '<option value="-1">Centro</label>';
                    echo '<option value="0" selected>Urbana</label>';
                    echo '<option value="1">Suburbana</label>';
                    echo '<option value="2">Rural</label>';
					}
				if($registro['Zona']==1){
                    echo '<option value="-1">Centro</label>';
                    echo '<option value="0">Urbana</label>';
                    echo '<option value="1" selected>Suburbana</label>';
                    echo '<option value="2">Rural</label>';
					}
				if($registro['Zona']==2){
                    echo '<option value="-1">Centro</label>';
                    echo '<option value="0">Urbana</label>';
                    echo '<option value="1">Suburbana</label>';
                    echo '<option value="2" selected>Rural</label>';
					}
					
                echo '</select>';
            echo '</div>';

            //Promedio Secundaria
			echo '<div class="four columns">';
				echo '<label for="Promedio_Sec">Promedio Secundaria</label>';
				echo '<input type="text" name="Promedio_Sec" id="Promedio_Sec" value="'.$registro['Promedio'].'" onKeyDown="testForEnter();">';
			echo '</div>';

			//Calificacion Examen Matematicas
			echo '<div class="four columns offset-by-one">';
				echo '<label for="Ex_Matematicas">Exámen Matemáticas</label>';
				echo '<input type="text" name="Ex_Matematicas" id="Ex_Matematicas" value="'.$registro['Examen2'].'" onKeyDown="testForEnter();">';
			echo '</div>';
		
			//Calificacion Examen Admision		
			echo '<div class="four columns offset-by-one">';
				echo '<label for="Ex_Admision">Exámen Admisión</label>';
				echo '<input type="text" name="Ex_Admision" id="Ex_Admision" value="'.$registro['Examen1'].'" onKeyDown="testForEnter();">';
			echo '</div>';
                
                echo '<div class="four columns">';
				echo '<label for="Conducta">Conducta</label>';
				echo '<select name="Conducta" id="Conducta">';
				
				//Selecciona la conducta segun la base
				if($registro['Conducta']==-1){
					echo '<option value="-1" selected>Regular</option>';
					echo '<option value="0">Buena</option>';
					echo '<option value="1">Excelente</option>';
				}
				if($registro['Conducta']==0){
					echo '<option value="-1">Regular</option>';
					echo '<option value="0" selected>Buena</option>';
					echo '<option value="1">Excelente</option>';
				}
				if($registro['Conducta']==1){
					echo '<option value="-1">Regular</option>';
					echo '<option value="0">Buena</option>';
					echo '<option value="1" selected>Excelente</option>';
				}
				echo '</select>';
			echo '</div>';

			echo '<div class="four columns offset-by-one">';
				echo '<label for="Induccion_Alumnos">Inducción Alumnos</label>';
				echo '<select name="Induccion_Alumnos" id="Induccion_Alumnos">';
				
				//Muestra la induccion de alumnos segun la base
				if($registro['Inducciona']==-1){
					echo '<option value="-1" selected>No asiste</option>';
					echo '<option value="0">Asiste</option>';
					echo '<option value="1">Asiste Puntual</option>';
				}if($registro['Inducciona']==0){
					echo '<option value="-1">No asiste</option>';
					echo '<option value="0" selected>Asiste</option>';
					echo '<option value="1">Asiste Puntual</option>';
				}if($registro['Inducciona']==1){
					echo '<option value="-1">No asiste</option>';
					echo '<option value="0">Asiste</option>';
					echo '<option value="1" selected>Asiste Puntual</option>';
				}
				echo '</select>';
			echo '</div>';

			echo '<div class="four columns offset-by-one">';
				echo '<label for="Induccion_Papas">Inducción Papás</label>';
				
				//Muestra la induccion de los alumnos segun la base
				echo '<select name="Induccion_Papas" id="Induccion_Papas">';
				if($registro['Induccionp']==-1){
					echo '<option value="-1" selected>No asiste</option>';
					echo '<option value="0">Asiste</option>';
					echo '<option value="1">Asiste Puntual</option>';
				}if($registro['Induccionp']==0){
					echo '<option value="-1">No asiste</option>';
					echo '<option value="0" selected>Asiste</option>';
					echo '<option value="1">Asiste Puntual</option>';
				}if($registro['Induccionp']==1){
					echo '<option value="-1">No asiste</option>';
					echo '<option value="0">Asiste</option>';
					echo '<option value="1" selected>Asiste Puntual</option>';
				}
				echo '</select>';
			echo '</div>';
			echo <<< HTML
				<hr>
		</div>
	</div><!-- container -->
	</div><!-- wrapper -->
	</form>

HTML;
		
			}
			
			}else{
				//Redirrecciona al formulario de acceso en caso de usuario y contraseña incorrectos o bandera "false"//
					echo <<< HTML
					<img src="img/decline.png" width="16" height="16"  alt=""/> Error de Usuario o Contraseña
					<meta http-equiv="refresh" content="2;URL=index.php">
					
HTML;

				}
		?>

<!-- End Document
================================================== -->
</body>
</html>