<?php

$host = "mysql.hostinger.es";
$user = "u859503001_az43l";
$password = "azaeldg";
$db = "u859503001_base2";

function connectToDB($host, $user, $password, $db){
	$connection = mysql_connect($host, $user, $password);
	if ( !empty($db) ){
		mysql_select_db($db, $connection);
	}
	mysql_set_charset("utf8", $connection);
	return $connection;
}

?>