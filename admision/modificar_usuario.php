<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Edgar Azael Deanda González; Luis Felipe Solís Enríquez">
  <title>CBTis 75 - Pre-registro</title>

  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/style2.css">
  <link href="css/messages.css" rel="stylesheet" type="text/css">
  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
<?php
@session_start();
if(@$_SESSION['acceso']==1){
	
$clave=@$_GET['clave'];

if(@$_GET['clave']!=NULL){
  //Conectamos con el Servidos
  $conexion=mysql_connect('localhost','root','') or die(mysql_error());
  
  //Seleccionamos la base de Datos
  mysql_select_db('cbtis75',$conexion);
  mysql_set_charset('utf8');
 
$consulta=mysql_query("select * from alumnos where clave='".$clave."'",$conexion);

while($fila=mysql_fetch_array($consulta)){
$array=explode("/", $fila['Distancia_y_Tiempo_a_su_Casa']);
$array2=explode("/", $fila['Fecha_de_Nacimiento']);

echo <<< html
	 <div class="container">
		<div class="row">
			<div class="large-12 columns">
            <center><h3>Editar alumno</h3></center>
			  <hr />
			  <form class="custom" id="form_registro" action="funciones/update.php" method="post" data-abide>
			  <input type="hidden" name="clave" value="{$clave}" /> 
				<fieldset>
				  <legend>Datos Generales</legend>
					<div class="row">
						<div class="large-4 columns">
              <label for="nombre">Nombre(s)*</label>
              <input type="text" name="nombre" id="nombre" placeholder="Primer Nombre  Segundo Nombre" pattern="[a-zA-Z]+"   value="{$fila['Nombre']}">
              <small class="error">Se requiere el Nombre</small>
            </div>
            <div class="large-3 columns">
              <label for="apellidop">Apellido Paterno*</label>
              <input type="text" name="apellidop" id="apellidop" placeholder="Apellido Paterno" pattern="alpha"   value="{$fila['Apellido_Paterno']}">
              <small class="error">Se requiere el Apellido Paterno</small>
            </div>
            <div class="large-3 columns">
              <label for="apellidom">Apellido Materno*</label>
              <input type="text" name="apellidom" id="apellidom" placeholder="Apellido Materno" pattern="alpha"   value="{$fila['Apellido_Materno']}">
              <small class="error">Se requiere el Apellido Materno</small>
            </div>
            <div class="large-2 columns">
              <label for="sexo">Sexo*</label>
              <select name="sexo" id="sexo"  >
html;
                if($fila['Sexo']=='Hombre'){
                echo '<option value="Hombre" selected>Hombre</option>';
				echo '<option value="Mujer">Mujer</option>';
				}elseif($fila['Sexo']=='Mujer'){
				echo '<option value="Hombre">Hombre</option>';
                echo '<option value="Mujer" selected>Mujer</option>';
				}else{
					echo '<option value="" selected disabled>Sel.</option>';	
				}
echo <<<html
              </select>
            </div>
					</div>
          
          <div class="row">  
            <div class="large-6 columns">
              <label for="day">Fecha de Nacimiento*</label>
              <div class="row">
                <div class="large-3 columns">
                  <input type="text" name="day" id="day"  value="{$array2[0]}">
                </div>
                <div class="large-5 columns">
                    <input type="text" name="month" id="month"  value="{$array2[1]}">
                </div>
                <div class="large-4 columns">
                  <input type="text" name="year" id="year"  value="{$array2[2]}">
                </div>
              </div>
            </div>
            <div class="large-2 columns">
              <div class="row collapse">
                <label for="edad">Edad</label>
                <div class="large-6 columns">
                  <input type="text" name="edad" id="edad" maxlength="2" pattern="integer" value="{$fila['Edad']}">
                </div>
                <div class="large-6 columns">
                  <span class="postfix">años</span>
                </div>
              </div>
            </div>
            <div class="large-2 columns">
              <label for="estadoc">Estado Civil*</label>
              <select name="estadoc" id="estadoc"  >
html;
                if($fila['Estado_Cibil']=='CASADO'){
                echo '<option value="Soltero(a)" selected>Casado(a)</option>';
                echo '<option value="Casado(a)">Soltero(a)</option>';
				}else{
				echo '<option value="Soltero(a)">Casado(a)</option>';
                echo '<option value="Casado(a)" selected>Soltero(a)</option>';
				}

echo <<< html
              </select>
            </div>
            <div class="large-2 columns">
              <label for="tsanguineo">Tipo Sanguineo</label>
              <div class="row collapse">
                <div class="large-6 columns">
                  <select name="tsanguineo" id="tsanguineo">
html;
					if(substr($fila['Tipo_Sanguineo'], 0, -1)=="O"){
						echo '<option value="O" selected>O</option>';
						echo '<option value="A">A</option>';
						echo '<option value="B">B</option>';
						echo '<option value="AB">AB</option>';
					}elseif(substr($fila['Tipo_Sanguineo'], 0, -1)=="A"){
						echo '<option value="O">O</option>';
						echo '<option value="A" selected>A</option>';
						echo '<option value="B">B</option>';
						echo '<option value="AB">AB</option>';
					}elseif(substr($fila['Tipo_Sanguineo'], 0, -1)=="B"){
						echo '<option value="O">O</option>';
						echo '<option value="A">A</option>';
						echo '<option value="B" selected>B</option>';
						echo '<option value="AB">AB</option>';
					}elseif(substr($fila['Tipo_Sanguineo'], 0, -1)=="AB"){
						echo '<option value="O">O</option>';
						echo '<option value="A">A</option>';
						echo '<option value="B">B</option>';
						echo '<option value="AB" selected>AB</option>';
					}else{
						echo '<option value="" selected disabled>Sel.</option>';
						echo '<option value="O">O</option>';
						echo '<option value="A">A</option>';
						echo '<option value="B">B</option>';
						echo '<option value="AB">AB</option>';	
					}
echo <<< html
                  </select>
                  <small class="error">Requerido</small>
                </div>
                <div class="large-6 columns">
                  <select name="rh" id="rh">
html;
					if(substr($fila['Tipo_Sanguineo'], -1)=="+"){
                    echo '<option value="+" selected>+</option>';
                    echo '<option value="-">-</option>';
					}elseif(substr($fila['Tipo_Sanguineo'], -1)=="-"){
					echo '<option value="+">+</option>';
                    echo '<option value="-" selected>-</option>';
					}else{
					echo '<option value="" selected disabled>Sel.</option>';
					echo '<option value="+">+</option>';
                    echo '<option value="-">-</option>';	
					}
echo <<< html
                  </select>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="large-2 columns">
              <label for="peso">Peso*</label>
              <div class="row collapse">
                <div class="large-6 columns">
                  <input type="number" name="peso" id="peso"   min="1" max="180" pattern="integer" value="{$fila['Peso']}">
                  <small class="error">Requerido</small>
                </div>
                <div class="large-6 columns">
                  <span class="postfix">kg</span>
                </div>
              </div>
            </div>
            <div class="large-2 columns">
              <label for="estatura">Estatura*</label>
              <div class="row collapse">
                <div class="large-6 columns">
                  <input type="number" name="estatura" id="estatura"   min="1" max="210" pattern="integer" value="{$fila['Estatura']}">
                  <small class="error">Requerida</small>
                </div>
                <div class="large-6 columns">
                  <span class="postfix">cm</span>
                </div>
              </div>
            </div>
            <div class="large-2 columns">
              <label for="cintura">Medida de Cintura*</label>
              <div class="row collapse">
                <div class="large-6 columns">
                  <input type="number" name="cintura" id="cintura"   min="1" max="180" pattern="integer" value="{$fila['Medida_de_la_Cintura']}">
                  <small class="error">Requerida</small>
                </div>
                <div class="large-6 columns">
                  <span class="postfix">cm</span>
                </div>
              </div>
            </div>
            <div class="large-3 columns">
              <label for="curp">CURP*</label>
              <input type="text" name="curp" id="curp"   pattern="[A-Z]{4}[0-9]{6}[H|M][A-Z]{2}[A-Z]{3}[0-9]{2}" maxlength="18" placeholder="CURP" value="{$fila['Curp']}">
              <small class="error">Se requiere la CURP</small>
            </div>
            <div class="large-3 columns">
              <label for="email">Correo Electrónico</label>
              <input type="email" name="email" id="email" placeholder="usuario@dominio.com" value="{$fila['Email']}">
            </div>
          </div>
				</fieldset>

        <fieldset>
          <legend>Dirección</legend>
          <div class="row">
            <div class="large-5 columns">
              <label for="estadon">Estado de Nacimiento*</label>
              <input type="text" name="estadon" id="estadon"  value="{$fila['Estado_donde_Nacio']}">
            </div>
            <div class="large-7 columns">
              <label for="municipion">Municipio de Nacimiento*</label>
              <input type="text" name="municipion" id="municipion"  value="{$fila['Municipio_donde_Nacio']}">
            </div>
          </div>
          <div class="row">
            <div class="large-5 columns">
              <label for="estado">Estado Donde Vive*</label>
              <input type="text" name="estado" id="estado"  value="{$fila['Estado_Donde_Vive']}">
            </div>
            <div class="large-7 columns">
              <label for="municipio">Municipio Donde Vives*</label>
              <input type="text" name="municipio" id="municipio"  value="{$fila['Municipio_donde_Nacio']}">
            </div>
          </div>
          <div class="row">
            <div class="large-5 columns">
              <label for="calle">Calle y Número*</label>
              <input type="text" name="calle" id="calle"   pattern="alpha_numeric" placeholder="Calle  Número" value="{$fila['Calle']}">
              <small class="error">Se requiere la Calle y Número</small>
            </div>
            <div class="large-5 columns">
              <label for="colonia">Colonia*</label>
              <input type="text" name="colonia" id="colonia"   pattern="alpha_numeric" placeholder="Colonia" value="{$fila['Colonia']}">
              <small class="error">Se requiere la Colonia</small>
            </div>
            <div class="large-2 columns">
              <label for="cp">Código Postal*</label>
              <input type="text" name="cp" id="cp"   pattern="integer" placeholder="37800" pattern="[0-9]{5}" value="{$fila['Codigo_Postal']}">
              <small class="error">Se requiere el Código Postal</small>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>Datos del Padre o Tutor</legend>
          <div class="row">
            <div class="large-4 columns">
              <label for="nombrep">Nombre completo</label>
              <input type="text" name="nombrep" id="nombrep" placeholder="Nombre(s)  Apellidos" pattern="alpha" value="{$fila['Nombre_del_Padre']}">
            </div>
            <div class="large-4 columns">
              <label for="ocupacion">Ocupación</label>
              <input type="text" name="ocupacion" id="ocupacion" placeholder="Ocupacion" pattern="alpha_numeric" value="{$fila['Ocupacion_del_Padre']}">
            </div>
            <div class="large-2 columns">
              <label for="tel">Teléfono Fijo</label>
              <input type="tel" name="tel" id="tel" maxlength="10" pattern="[0-9]{7,10}" placeholder="4180123456" value="{$fila['Telefono_del_Padre']}">
            </div>
            <div class="large-2 columns">
              <label for="cel">Teléfono Celular</label>
              <input type="tel" name="cel" id="cel" maxlength="10" pattern="[0-9]{7,10}" placeholder="4180123456" value="{$fila['Celular_del_Padre']}">
            </div>
          </div>
        </fieldset>
        <fieldset>
		
          <legend>Tiempo y Distancia del CBTis75 a tu Casa</legend>
          <div class="row">
            <div class="large-3 columns">
              <label for="tiempo">Tiempo</label>
              <div class="row collapse">
                <div class="large-4 columns">
                  <input type="text" name="tiempo" id="tiempo" value="{$array[0]}">
                </div>
                <div class="large-8 columns">
                  <span class="postfix">Minutos</span>
                </div>
              </div>
            </div>
            <div class="large-3 columns">
              <label for="distancia">Distancia</label>
              <div class="row collapse">
                <div class="large-4 columns">                  
                  <input type="text" name="distancia" id="distancia" value="{$array[1]}">
                </div>
                <div class="large-8 columns">
                  <span class="postfix">km</span>
                </div>
              </div>
            </div>
            <div class="large-4 columns">
              <label for="transporte">Transporte</label>
              <input type="text" name="transporte" id="transporte" value="{$fila['Transporte']}">
            </div>
            <div class="large-2 columns">
              <label for="costo">Costo</label>
              <div class="row collapse">
                <div class="large-4 columns">
                  <span class="prefix">$</span>
                </div>
                <div class="large-8 columns">
                  <input type="text" name="costo" id="costo" value="{$fila['Costo_del_transporte']}">
                </div>
              </div>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>Secundaria de Procedencia</legend>
          <div class="row">
            <div class="large-5 columns">
              <label for="estadosec">Estado</label>
              <input type="text" name="estadosec" id="estadosec"  value="{$fila['Estado_de_Secundaria']}">
            </div>
            <div class="large-7 columns">
              <label for="municipiosec">Municipio</label>
              <input type="text" name="municipiosec" id="municipiosec"  value="{$fila['Municipio_de_Secundaria']}">
            </div>
          </div>
          <div class="row">
            <div class="large-5 columns">
              <label for="nombresec">Nombre</label>
              <input type="text" name="nombresec" id="nombresec" pattern="alpha_numeric" placeholder="Nombre de la Secundaria" value="{$fila['Nombre_de_Secundaria']}">
            </div>
            <div class="large-4 columns">
              <label for="domiciliosec">Domicilio</label>
              <input type="text" name="domiciliosec" id="domiciliosec" pattern="alpha_numeric" placeholder="Domicilio de la Secundaria" value="{$fila['Domicilio_de_secundaria']}">
            </div>
            <div class="large-3 columns">
              <label for="tiposec">Tipo</label>
              <input type="text" name="tiposec" id="tiposec" value="{$fila['Tipo_de_secundaria']}">
            </div>
          </div>
          <div class="row">
            <div class="large-2 columns">
              <label for="modalidadsec">Modalidad</label>
              <select name="modalidadsec" id="modalidadsec">
html;
				if($fila['Modalidad_de_Secundaria']=='Escolarizada'){
                echo '<option value="Escolarizada" selected>Escolarizada</option>';
                echo '<option value="Abierta">Abierta</option>';
				}elseif($fila['Modalidad_de_Secundaria']=='Abierta'){
                echo '<option value="Escolarizada">Escolarizada</option>';
                echo '<option value="Abierta" selected>Abierta</option>';
				}else{
				echo '<option value="" disabled selected>Seleccionar</option>';
				echo '<option value="Escolarizada">Escolarizada</option>';
                echo '<option value="Abierta">Abierta</option>';
				}
echo <<< html
              </select>
            </div>
            <div class="large-2 columns">
              <label for="regimensec">Régimen</label>
              <select name="regimensec" id="regimensec">
html;
				if($fila['Regimen_de_Secundaria']=='Público'){
                echo '<option value="Público" selected>Público</option>';
                echo '<option value="Privado">Privado</option>';
				}elseif($fila['Regimen_de_Secundaria']=='Privado'){
                echo '<option value="Público">Público</option>';
                echo '<option value="Privado" selected>Privado</option>';
				}else{
				echo '<option value="" disabled selected>Seleccionar</option>';
				echo '<option value="Público">Público</option>';
                echo '<option value="Privado">Privado</option>';
				}
echo <<< html
              </select>
            </div>
            <div class="large-2 columns">
              <label for="boleta">Boleta</label>
              <select name="boleta" id="boleta">
html;
				if($fila['Boleta_de_Secundaria']=="SI"){
                echo '<option value="SI" selected>Sí</option>';
                echo '<option value="NO">No</option>';
				}elseif($fila['Boleta_de_Secundaria']=="NO"){
				echo '<option value="SI">Sí</option>';
                echo '<option value="NO" selected>No</option>';
				}else{
				echo '<option value="" selected disabled>Seleccionar</option>';
				echo '<option value="SI">Sí</option>';
                echo '<option value="NO">No</option>';
				}
echo <<< html
              </select>
            </div>
            <div class="large-2 columns">
              <label for="certificado">Certificado</label>
              <select id="certificado" name="certificado">
html;
				if($fila['Certificado_de_Secundaria']=="SI"){
                echo '<option value="SI" selected>Sí</option>';
                echo '<option value="NO">No</option>';
				}elseif($fila['Certificado_de_Secundaria']=="NO"){
                echo '<option value="SI">Sí</option>';
                echo '<option value="NO" selected>No</option>';
				}else{
				echo '<option value="" selected disabled>Seleccionar</option>';
				echo '<option value="SI">Sí</option>';
                echo '<option value="NO">No</option>';
				}
echo<<<html
              </select>
            </div>
            <div class="large-1 columns">
              <label for="promedio">Promedio</label>
              <input type="number" name="promedio" id="promedio" pattern="number" step=".1" min="0" max="10" value="{$fila['Promedio_de_Secundaria']}">
            </div>
            <div class="large-3 columns">
              <label for="cedula">Cédula de Aspirante SEG</label>
              <input type="text" name="cedula" id="cedula" pattern="[a-z|A-Z|0-9]{1,8}" maxlength="8" value="{$fila['Cedula_de_Aspirante_SEG']}">
            </div>
          </div>
        </fieldset>
html;
}
?>

<?php
$conexion=mysql_connect('localhost','root','') or die('Ups Algun dato esta incorrecto');
  
  //Seleccionamos la base de Datos
  mysql_select_db('cbtis75',$conexion);
  mysql_set_charset('utf8');
 
$consulta=mysql_query("select * from alumnos where clave='".$clave."'",$conexion);

while($fila=mysql_fetch_array($consulta)){
echo <<< html
        <fieldset>
          <legend>Elige del 1 al 7 las carreras de tu preferencia</legend>
          <div class="row">
            <div class="large-12 columns">
              <div class="row">
                <div class="large-2 columns">
                  <label for="carrera1" class="right inline">Primera Opción</label>  
                </div>
                <div class="large-10 columns">
                 <input type="text" name="carrera1" id="carrera1"  value="{$fila['Primera_Opcion']}">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="large-12 columns">
              <div class="row">
                <div class="large-2 columns">
                  <label for="carrera2" class="right inline">Segunda Opción</label>  
                </div>
                <div class="large-10 columns">
                  <input type="text" name="carrera2" id="carrera2"  value="{$fila['Segunda_Opcion']}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <div class="row">
                <div class="large-2 columns">
                  <label for="carrera3" class="right inline">Tercera Opción</label>  
                </div>
                <div class="large-10 columns">
                  <input type="text" name="carrera3" id="carrera3"  value="{$fila['Tercera_Opcion']}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <div class="row">
                <div class="large-2 columns">
                  <label for="carrera4" class="right inline">Cuarta Opción</label>  
                </div>
                <div class="large-10 columns">
                   <input type="text" name="carrera4" id="carrera4"  value="{$fila['Cuarta_Opcion']}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <div class="row">
                <div class="large-2 columns">
                  <label for="carrera5" class="right inline">Quinta Opción</label>  
                </div>
                <div class="large-10 columns">
                  <input type="text" name="carrera5" id="carrera5"  value="{$fila['Quinta_Opcion']}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <div class="row">
                <div class="large-2 columns">
                  <label for="carrera6" class="right inline">Sexta Opción</label>  
                </div>
                <div class="large-10 columns">
                  <input type="text" name="carrera6" id="carrera6"  value="{$fila['Sexta_Opcion']}">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <div class="row">
                <div class="large-2 columns">
                  <label for="carrera7" class="right inline">Séptima Opción</label>  
                </div>
                <div class="large-10 columns">
                  <input type="text" name="carrera7" id="carrera7"  value="{$fila['Septima_Opcion']}">
              </div>
            </div>
          </div>
        </fieldset>

         <div class="row">
          <div class="large-6 large-centered columns">
            <input type="submit" class="button secondary expand" value="Guardar">
          </div>
        </div>

				</form>
			</div>
		</div>
	</div><!--container-->


  <script src="js/vendor/jquery.js"></script>

  <script src="js/foundation.min.js"></script>
  <script src="js/foundation/foundation.abide.js"></script>
html;
}

}else{
echo <<< HTML
	<div class="cent2" align="center">
	<img src="/img/decline.png" width="16" height="16"  alt=""/> No hay registro seleccionado.
	</div>
	<meta http-equiv="refresh" content="3;URL=index.php">
HTML;
}


}else{
echo <<< HTML
	<div class="cent2" align="center">
	<img src="/img/decline.png" width="16" height="16"  alt=""/> No has iniciado sesion.
	</div>
	<meta http-equiv="refresh" content="3;URL=index.php">
HTML;
}
?>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>

  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>

  <script src="js/functions.js"></script><!--Custom functions-->

</body>
</html>
