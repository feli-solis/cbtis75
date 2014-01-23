<?php
error_reporting(E_ALL); //Remove this line for production, it simply will allow php to display any errors
 
$connection = mysql_connect("localhost", "u58905_Mario", "Mario114mas");
$db = "u58905_cbtis75";
mysql_select_db($db, $connection);
mysql_set_charset("utf8"); // Cotejamiento de BD: utf8_general_ci.

$estado_sel = "";
$estados_array = array();
$municipios_array = array();
$estados_query = "select nombre from estados";
$estados_result = mysql_query($estados_query) or die(mysql_error());

while ($row = mysql_fetch_array($estados_result)) {
  $estados_array[] = $row;
}

 
//We check to see if the "make" post has come through before we do any processing.
if(isset($_POST['estado']))
{
	
	foreach ($variable as $key => $value) {
		
	}
	// In my example I assign the posted make to a variable and use strtolower() to put all the text in lowercase so it will match an array above.
	$estado = strtolower($_POST['estado']);
	
	// Using a varable variable I put it into a foreach loop and just like the first select box build the options.
	// Using echo we are able to essentially send back the data.
	// Basically whatever you echo on this page will be output on the main page.
	foreach($$model as $mo){ echo '<option value="'.$mo.'">'.$mo.'</option>'; }
}
 
 
?>