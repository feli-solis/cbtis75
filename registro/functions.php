<?php

$host = "localhost";
$user = "u58905_Mario";
$password = "Mario114mas";
$db = "u58905_mexico";

function connectToDB($host, $user, $password, $db){
	$connection = mysql_connect($host, $user, $password);
	if ( !empty($db) ){
		mysql_select_db($db, $connection);
	}
	mysql_set_charset("utf8", $connection);
	return $connection;
}

?>