<?php

require 'functions.php';

$connection = connectToDB("localhost", "root", "", "mexico");

if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
	$action = $_REQUEST['action'];
	switch ($action) {
		case 'getEstados': getEstados(); break;
		case 'getMunicipios': getMunicipios(); break;
	}
}

function getEstados(){
	header('Content-Type: application/json');
	$estados = array();
	$query = mysql_query("SELECT nombre, id FROM estados");
	while($row = mysql_fetch_assoc($query)){
		$estados[] = $row;
	}
	echo json_encode($estados);
}

function getMunicipios(){
	header('Content-Type: application/json');
	$municipios = array();
	$query = mysql_query("SELECT * FROM estados");
	while($row = mysql_fetch_array($query)){
		if($_GET['estado'] == $row['nombre']){
			$index = $row['id'];
			break;
		}
	}
	$query = mysql_query("SELECT municipios.nombre FROM municipios INNER JOIN estados ON municipios.estado_id = estados.id WHERE municipios.estado_id = $index");
	while($row = mysql_fetch_assoc($query)){
		$municipios[] = $row;
	}
	echo json_encode($municipios);
}

?>