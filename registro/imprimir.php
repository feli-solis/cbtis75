<?php

mysql_connect('localhost', 'u58905_Mario', 'Mario114mas');
mysql_select_db('u58905_cbtis75');
mysql_set_charset('utf8');
$query = mysql_query('SELECT * FROM alumnos WHERE Curp ="'.$_GET["curp"].'"');

while ( $fila = mysql_fetch_array($query)) {
  $nombre = $fila['Nombre'];
  $apellidop = $fila['Apellido_Paterno'];
  $apellidom = $fila['Apellido_Materno'];
  $sexo = $fila['Sexo'];
  
  $fechan = $fila['Fecha_de_Nacimiento'];
  $edad = $fila['Edad'];
  $estadoc = $fila['Estado_Civil'];
  $tsanguineo = $fila['Tipo_Sanguineo'];
  
  $peso = $fila['Peso'];
  $estatura = $fila['Estatura'];
  $cintura = $fila['Medida_de_la_Cintura'];
  $curp = $fila['Curp'];
  
  $email = $fila['Email'];
  $estadon = $fila['Estado_donde_Nacio'];
  $municipion = $fila['Municipio_donde_Nacio'];
  $estado = $fila['Estado_Donde_Vive'];
  
  $municipio = $fila['Municipio_Donde_Vive'];
  $calle = $fila['Calle'];
  $colonia = $fila['Colonia'];
  $cp = $fila['Codigo_Postal'];
  
  $nombrep = $fila['Nombre_del_Padre'];
  $ocupacion = $fila['Ocupacion_del_Padre'];
  $tel = $fila['Telefono_del_Padre'];
  $cel = $fila['Celular_del_Padre'];

  $tiempo = $fila['Distancia_y_Tiempo_a_su_Casa'];
  $transporte = $fila['Transporte'];
  $costo = $fila['Costo_del_transporte'];

  $estadosec = $fila['Estado_de_Secundaria'];
  $municipiosec = $fila['Municipio_de_Secundaria'];
  $nombresec = $fila['Nombre_de_Secundaria'];
  $domiciliosec = $fila['Domicilio_de_secundaria'];

  $tiposec = $fila['Tipo_de_secundaria'];
  $modalidadsec = $fila['Modalidad_de_Secundaria'];
  $regimensec = $fila['Regimen_de_Secundaria'];
  $boletasec = $fila['Boleta_de_Secundaria'];

  $certificado = $fila['Certificado_de_Secundaria'];
  $promedio = $fila['Promedio_de_Secundaria'];
  $cedula = $fila['Cedula_de_Aspirante_SEG'];

  $primera = $fila['Primera_Opcion'];
  $segunda = $fila['Segunda_Opcion'];
  $tercera = $fila['Tercera_Opcion'];
  $cuarta = $fila['Cuarta_Opcion'];
  $quinta = $fila['Quinta_Opcion'];
  $sexta = $fila['Sexta_Opcion'];
  $septima = $fila['Septima_Opcion'];

}
//html2fpdf
$html= <<< HTML
<page>
  <table border="1" rules="all">
    <tr>
      <th>Nombre(s)</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Sexo</th>
    </tr>
    <tr>
      <td>$nombre</td>
      <td>$apellidop</td>
      <td>$apellidom</td>
      <td>$sexo</td>
    </tr>

    <tr>
      <th>Fecha de Nacimiento</th>
      <th>Edad</th>
      <th>Estado Civil</th>
      <th>Tipo Sanguineo</th>
    </tr>
    <tr>
      <td>$fechan</td>
      <td>$edad</td>
      <td>$estadoc</td>
      <td>$tsanguineo</td>
    </tr>

    <tr>
      <th>Peso</th>
      <th>Estatura</th>
      <th>Meidida de Cintura</th>
      <th>CURP</th>
    </tr>
    <tr>
      <td>$peso</td>
      <td>$estatura</td>
      <td>$cintura</td>
      <td>$curp</td>
    </tr>

    <tr>
      <th colspan="2">Correo Electronico</th>
      <th colspan="2">Estado de Nacimiento</th>
    </tr>
    <tr>
      <td colspan="2">$email</td>
      <td colspan="2">$estadon</td>
    </tr>
    <tr>
      <th colspan="2">Municipio de Nacimiento</th>
      <th colspan="2">Estado donde Vive</th>
    </tr>
    <tr>
      <td colspan="2">$municipion</td>
      <td colspan="2">$estado</td>
    </tr>

    <tr>
      <th colspan="2">Municipio donde Vive</th>
      <th colspan="2">Calle</th>
    </tr>
    <tr>
      <td colspan="2">$municipio</td>
      <td colspan="2">$calle</td>
    </tr>
    <tr>
      <th colspan="2">Colonia</th>
      <th colspan="2">Codigo Postal</th>
    </tr>
    <tr>
      <td colspan="2">$colonia</td>
      <td colspan="2">$cp</td>
    </tr>

    <tr>
      <th>Nombre del Tutor</th>
      <th>Ocupacion</th>
      <th>Telefono</th>
      <th>Celular</th>
    </tr>
    <tr>
      <td>$nombrep</td>
      <td>$ocupacion</td>
      <td>$tel</td>
      <td>$cel</td>
    </tr>

    <tr>
      <th>Tiempo y Distancia al CBTis75</th>
      <th>Transporte</th>
      <th>Costo</th>
      <th></th>
    </tr>
    <tr>
      <td>$tiempo</td>
      <td>$transporte</td>
      <td>$costo</td>
      <td></td>
    </tr>

    <tr>
      <th colspan="2">Estado Secundaria</th>
      <th colspan="2">Municipio Secundaria</th>
    </tr>

    <tr>
      <td colspan="2">$estadosec</td>
      <td colspan="2">$municipiosec</td>
    </tr>

    <tr>
      <th colspan="2">Nombre Secundaria</th>
      <th colspan="2">Domicilio Secundaria</th>
    </tr>

    <tr>
      <td colspan="2">$nombresec</td>
      <td colspan="2">$domiciliosec</td>
    </tr>

    <tr>
      <th>Tipo Secundaria</th>
      <th>Modalidad Secundaria</th>
      <th>Regimen Secundaria</th>
      <th>Boleta Secundaria</th>
    </tr>
    <tr>
      <td>$tiposec</td>
      <td>$modalidadsec</td>
      <td>$regimensec</td>
      <td>$boletasec</td>
    </tr>

    <tr>
      <th>Certificado Secundaria</th>
      <th>Promedio Secundaria</th>
      <th>Cedula de Aspirante SEG</th>
      <th></th>
    </tr>
    <tr>
      <td>$certificado</td>
      <td>$promedio</td>
      <td>$cedula</td>
      <td></td>
    </tr>

    <tr>
      <th colspan="2">Primera Opcion</th>
      <th colspan="2">Segunda Opcion</th>
    </tr>
    <tr>
      <td colspan="2">$primera</td>
      <td colspan="2">$segunda</td>
    </tr>
    
    <tr>
      <th colspan="2">Tercera Opcion</th>
      <th colspan="2">Cuarta Opcion</th>
    </tr>
    
    <tr>
      <td colspan="2">$tercera</td>
      <td colspan="2">$cuarta</td>
    </tr>

    <tr>
      <th colspan="2">Quinta Opcion</th>
      <th colspan="2">Sexta Opcion</th>
    </tr>
    <tr>
      <td colspan="2">$quinta</td>
      <td colspan="2">$sexta</td>
    </tr>

    <tr>
      <th colspan="2">Septima Opcion</th>
      <th colspan="2"></th>
    </tr>
    
    <tr>
      <td colspan="2">$septima</td>
      <td colspan="2"></td>
    </tr>

  </table>
</page>
HTML;
require_once 'html2pdf_v4.03/html2pdf.class.php';
$html2pdf = new HTML2PDF('P','A4','es');
$html2pdf->WriteHTML($html);
$html2pdf->Output('imprimir.pdf','D');

//redireccion
?>