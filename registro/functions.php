<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "mexico";

function connectToDB($host, $user, $password, $db){
	$connection = mysql_connect($host, $user, $password);
	if ( !empty($db) ){
		mysql_select_db($db, $connection);
	}
	mysql_set_charset("utf8", $connection);
	return $connection;
}

?>