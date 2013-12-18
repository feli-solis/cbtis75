<?php
$connection = mysql_connect("mysql.hostinger.es", "u859503001_az43l", "azaeldg");
$db = "u859503001_base2";
mysql_select_db($db, $connection);
mysql_set_charset("utf8"); // Cotejamiento de BD: utf8_general_ci.

$estados_array = array();
$municipios_array = array();
$estados_query = "select nombre from estados";
$municipios_query = "select nombre from municipios";
$estados_result = mysql_query($estados_query) or die(mysql_error());
$municipios_result = mysql_query($municipios_query) or die(mysql_error());

while ($row = mysql_fetch_array($estados_result)) {
  $estados_array[] = $row;
}

while ($fila = mysql_fetch_array($municipios_result)) {
  $municipios_array[] = $row;
}

//print_r($estados_array);
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>CBTis 75 - Pre-registro</title>
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

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

   <!-- Script
   =================================================== -->
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript">
      $('#estado').change(function(){ //Basically saying when the first select box changes values run the function below.
        var make = $(this).val(); // Grab the value of the selection to send to the select-request.php via ajax
        $.post('select-request.php', {make:make}, function(data){ // Run a ajax request and send the var make as a post variable named "make" and return the info in the "data" var.
        $('#municipio').html(data); // Have jquery change the html within the second select box with the "data" we got back from the ajax request.
  });
});
    </script>

</head>
<body>
	
	<!-- Primary Page Layout
	================================================== -->

	<div class="wrapper color-one">
  <div class="container">
		<div class="sixteen columns">
			<div class="eleven columns alpha">
				<h1 class="remove-bottom" style="margin-top: 40px">Proceso de Selección 2014</h1>
				<h5>Pre-registro del Candidato</h5>
			</div>
			<div class="four columns omega">
				<img src="img/DEGETI.jpg" alt="DGETI" id="logo">
			</div>
			<hr />
		</div>
    <form action="Alta.php" method="post">
      <div class="sixteen columns">
        <h4>Datos Generales</h4>
      </div>
  		<div class="one-third column">
  		  <label for="nombre">Nombre(s)</label>
        <input type="text" name="nombre" id="nombre" onKeyUp="upCase(this.id);" />
  		</div>
        <div class="one-third column">
  		  <label for="apellidop">Apellido Paterno</label>
        <input type="text" name="apellidop" id="apellidop" onKeyUp="upCase(this.id);" />
  		</div>
        <div class="one-third column">
  		    <label for="apellidom">Apellido Materno</label>
          <input type="text" name="apellidom" id="apellidom" onKeyUp="upCase(this.id);" />
  		</div>

      <div class="four columns">
        <label for="sexo">Sexo</label>
        <!-- <input type="text" name="sexo" id="sexo" onKeyUp="upCase(this.id);" /> -->
        <select name="sexo" id="sexo">
          <option value="MASCULINO">MASCULINO</option>
          <option value="FEMENINO">FEMENINO</option>
        </select>
      </div>

      <div class="four columns">
        <label for="edad">Edad</label>
        <input type="text" name="edad" id="edad" onKeyUp="upCase(this.id);" />
      </div>

      <div class="one-third column">
        <label for="peso">Peso</label>
        <input type="text" name="peso" id="peso" onKeyUp="upCase(this.id);" />
      </div>

      <div class="one-third column">
        <label for="estatura">Estatura</label>
        <input type="text" name="estatura" id="estatura" onKeyUp="upCase(this.id);" />
      </div>
          
      <div class="one-third column">
        <label for="cintura">Medida de la cintura (cm)</label>
        <input type="text" name="cintura" id="cintura" onKeyUp="upCase(this.id);" />
      </div>
      
      <div class="eight columns">
        <label for="fechan">Fecha de Nacimiento</label>
        <input type="date" name="fechan" id="fechan" />
      </div>

      <div class="eight columns">
        <label for="email">Correo electrónico</label>
        <input type="text" name="email" id="email" />
      </div>
      <div class="four columns">
        <label for="curp">CURP</label>
        <input type="text" name="curp" id="curp" onKeyUp="upCase(this.id);" />
      </div>
      <div class="four columns">
        <label for="estadoc">Estado Civil</label>
        <input type="text" name="estadoc" id="estadoc" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="four columns">
        <label for="tsanguineo">Tipo Sanguineo</label>
        <input type="text" name="tsanguineo" id="tsanguineo" onKeyUp="upCase(this.id);"/>
      </div>
      
      <div class="clear"></div>

      <div class="sixteeen columns">
        <h4>Dirección</h4>
      </div>
      
      <div class="clear"></div>
      
      <div class="eight columns">
        <label for="estado">Estado donde vives</label>
        <input type="text" name="estado" id="estado" onKeyUp="upCase(this.id);">
        <!-- <select id="estado" name="estado" onChange="setMunicipios();">
          <option value="">---Por favor selecciona un estado---</option> -->
          <?php
            /*foreach ($estado as $e) {
              echo '<option value="'.$e.'">'.$e.'</option>';
            }*/
          ?>
        </select>
      </div>   
      <div class="eight columns">
        <label for="municipio">Municipio donde vives</label>
        <!-- <select id="municipio" name="municipio"> -->
        <input type="text" name="municipio" id="municipio" onKeyUp="upCase(this.id);">
          <!-- <option value="">Por favor selecciona un estado</option> -->
        </select>
      </div>
          
      <div class="eight columns">
        <label for="municipion">Municipio de nacimiento</label>
        <input type="text" name="municipion" id="municipion" onKeyUp="upCase(this.id);" />
      </div>

      <div class="seven columns">
        <label for="calle">Calle</label>
        <input type="text" name="calle" id="calle" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="seven columns">
        <label for="colonia">Colonia</label>
        <input type="text" name="colonia" id="colonia" onKeyUp="upCase(this.id);"/>
      </div>

      <div class="two columns">
        <label for="cp">C.P.</label>
        <input type="text" name="cp" id="cp" />
      </div>

      <!-- <div class="four columns">
        <label for="fechan">Fecha de Nacimiento</label>
        <input type="text" name="fechan" id="fechan" />
      </div> -->
      <div class="sixteen columns">
        <h4>Datos del Padre o Tutor</h4>
      </div>
      <div class="eight columns">
        <label for="nombrep">Nombre completo</label>
        <input type="text" name="nombrep" id="nombrep" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="eight columns">
        <label for="ocupacion">Ocupación</label>
        <input type="text" name="ocupacion" id="ocupacion" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="eight columns">
        <label for="tel">Teléfono Fijo</label>
        <input type="text" name="tel" id="tel" />
      </div>
      <div class="eight columns">
        <label for="cel">Teléfono Celular</label>
        <input type="text" name="cel" id="cel" />
      </div>
      
      <div class="sixteen columns">
        <h4>Otros Datos</h4>
      </div>
      <div class="sixteen columns">
        <label for="tiempo">Distancia y tiempo del CBTis75 a tu casa</label>
        <input type="text" name="tiempo" id="tiempo" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="eight columns">
        <label for="transporte">Transporte</label>
        <select id="transporte" name="transporte">
          <option value="">---Selecciona una opción---</option>
          <option value="AUTOBUS">Autobus Foráneo</option>
          <option value="URBANO">Urbano</option>
          <option value="AUTOMOVIL">Automóvil</option>
          <option value="BICICLETA">Bicicleta</option>
          <option value="CAMINANDO">Caminando</option>
          <option value="OTRO">Otro</option>
        </select>
      </div>
      <div class="eight columns">
        <label for="costo">Costo del Transporte</label>
        <input type="text" name="costo" id="costo" />
      </div>

      <div class="sixteen columns">
        <h4>Secundaria de procedencia</h4>
      </div>
      <div class="eight columns">
        <label for="nombresec">Nombre</label>
        <input type="text" name="nombresec" id="nombresec" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="eight columns">
        <label for="domiciliosec">Domicilio</label>
        <input type="text" name="domiciliosec" id="domiciliosec" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="eight columns">
        <label for="municipiosec">Municipio</label>
        <input type="text" name="municipiosec" id="municipiosec" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="eight columns">
        <label for="estadosec">Estado</label>
        <input type="text" name="estadosec" id="estadosec" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="sixteen columns">
        <select id="tiposec" name="tiposec">
          <option value="">---Selecciona una opción---</option>
          <option value="GENERAL">General</option>
          <option value="TECNICA">Técnica</option>
          <option value="INEA">INEA</option>
          <option value="TELESECUNDARIA">Telesecundaria</option>
          <option value="TRABAJADORES">Trabajadores</option>
          <option value="PARTICULAR">Particular</option>
        </select>
      </div>
      <div class="eight columns">
        <label for="modalidadsec">Modalidad</label>
        <input type="text" name="modalidadsec" id="modalidadsec" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="eight columns">
        <label for="eight columns">Régimen</label>
        <input type="text" name="regimensec" id="regimensec" onKeyUp="upCase(this.id);"/>
      </div>
      <div class="one-third column">
        <label for="promedio">Promedio</label>
        <input type="text" name="promedio" id="promedio" />
      </div>
      <div class="one-third column">
        <label for="boleta">Boleta de Secundaria</label>
        <select id="boleta" name="boleta">
          <option value="--Seleccionar--"></option>
          <option value="SI">Sí</option>
          <option value="NO">No</option>
        </select>
      </div>
      <div class="one-third column">
        <label for="certificado">Certificado de Secundaria</label>
        <select id="certificado" name="certificado">
          <option value="">---Selecciona---</option>
          <option value="SI">Sí</option>
          <option value="NO">No</option>
        </select>
      </div>

      <div class="sixteen columns">
        <h4>Elige del 1 al 7 las carreras de tu preferencia</h4>
      </div>
      <div class="sixteen columns">
        <label for="carrera1">Primera opción</label>
        <select name="carrera1" id="carrera1">
          <option value="">---SELECCIONA UNO---</option>
          <option value="ADMINISTRACION DE RECURSOS HUMANOS">Administración de Recursos Humanos</option>
          <option value="CONTABILIDAD">Contabilidad</option>
          <option value="ELECTRICIDAD">Electricidad</option>
          <option value="LOGISTICA">Logística</option>
          <option value="MECANICA INDUSTRIAL">Mecánica Industrial</option>
          <option value="PROGRAMACION">Programación</option>
          <option value="SOPORTE Y MANTENIMIENTO TECNICO">Soporte y Mantenimiento Técnico</option>
        </select>
      </div>
      <div class="sixteen columns">
        <label for="carrera2">Segunda opción</label>
        <select name="carrera2" id="carrera2">
          <option value="">---SELECCIONA UNO---</option>
          <option value="ADMINISTRACION DE RECURSOS HUMANOS">Administración de Recursos Humanos</option>
          <option value="CONTABILIDAD">Contabilidad</option>
          <option value="ELECTRICIDAD">Electricidad</option>
          <option value="LOGISTICA">Logística</option>
          <option value="MECANICA INDUSTRIAL">Mecánica Industrial</option>
          <option value="PROGRAMACION">Programación</option>
          <option value="SOPORTE Y MANTENIMIENTO TECNICO">Soporte y Mantenimiento Técnico</option>
        </select>
      </div>
      <div class="sixteen columns">
        <label for="carrera3">Tercera opción</label>
        <select name="carrera3" id="carrera3">
          <option value="">---SELECCIONA UNO---</option>
          <option value="ADMINISTRACION DE RECURSOS HUMANOS">Administración de Recursos Humanos</option>
          <option value="CONTABILIDAD">Contabilidad</option>
          <option value="ELECTRICIDAD">Electricidad</option>
          <option value="LOGISTICA">Logística</option>
          <option value="MECANICA INDUSTRIAL">Mecánica Industrial</option>
          <option value="PROGRAMACION">Programación</option>
          <option value="SOPORTE Y MANTENIMIENTO TECNICO">Soporte y Mantenimiento Técnico</option>
        </select>
      </div>
      <div class="sixteen columns">
        <label for="carrera4">Cuarta opción</label>
        <select name="carrera4" id="carrera4">
          <option value="">---SELECCIONA UNO---</option>
          <option value="ADMINISTRACION DE RECURSOS HUMANOS">Administración de Recursos Humanos</option>
          <option value="CONTABILIDAD">Contabilidad</option>
          <option value="ELECTRICIDAD">Electricidad</option>
          <option value="LOGISTICA">Logística</option>
          <option value="MECANICA INDUSTRIAL">Mecánica Industrial</option>
          <option value="PROGRAMACION">Programación</option>
          <option value="SOPORTE Y MANTENIMIENTO TECNICO">Soporte y Mantenimiento Técnico</option>
        </select>
      </div>
      <div class="sixteen columns">
        <label for="carrera5">Quinta opción</label>
        <select name="carrera5" id="carrera5">
          <option value="">---SELECCIONA UNO---</option>
          <option value="ADMINISTRACION DE RECURSOS HUMANOS">Administración de Recursos Humanos</option>
          <option value="CONTABILIDAD">Contabilidad</option>
          <option value="ELECTRICIDAD">Electricidad</option>
          <option value="LOGISTICA">Logística</option>
          <option value="MECANICA INDUSTRIAL">Mecánica Industrial</option>
          <option value="PROGRAMACION">Programación</option>
          <option value="SOPORTE Y MANTENIMIENTO TECNICO">Soporte y Mantenimiento Técnico</option>
        </select>
      </div>
      <div class="sixteen columns">
        <label for="carrera6">Sexta opción</label>
        <select name="carrera6" id="carrera6">
          <option value="">---SELECCIONA UNO---</option>
          <option value="ADMINISTRACION DE RECURSOS HUMANOS">Administración de Recursos Humanos</option>
          <option value="CONTABILIDAD">Contabilidad</option>
          <option value="ELECTRICIDAD">Electricidad</option>
          <option value="LOGISTICA">Logística</option>
          <option value="MECANICA INDUSTRIAL">Mecánica Industrial</option>
          <option value="PROGRAMACION">Programación</option>
          <option value="SOPORTE Y MANTENIMIENTO TECNICO">Soporte y Mantenimiento Técnico</option>
        </select>
      </div>
      <div class="sixteen columns">
        <label for="carrera7">Séptima opción</label>
        <select name="carrera7" id="carrera7">
          <option value="">---SELECCIONA UNO---</option>
          <option value="ADMINISTRACION DE RECURSOS HUMANOS">Administración de Recursos Humanos</option>
          <option value="CONTABILIDAD">Contabilidad</option>
          <option value="ELECTRICIDAD">Electricidad</option>
          <option value="LOGISTICA">Logística</option>
          <option value="MECANICA INDUSTRIAL">Mecánica Industrial</option>
          <option value="PROGRAMACION">Programación</option>
          <option value="SOPORTE Y MANTENIMIENTO TECNICO">Soporte y Mantenimiento Técnico</option>
        </select>
      </div>
      <div class="four columns offset-by-six">
        <input type="submit" value="Enviar">
      </div>
    </form>
	</div><!-- container -->
  </div><!-- wrapper -->

</body>
</html>
