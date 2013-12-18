<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exportando..</title>
</head>

<body>
<?php 
header("Content-type: application/vnd.ms-excel; name='excel'");
if ($_POST['doc']==1){ 
header("Content-Disposition: filename=Consulta.xls"); 
}elseif($_POST['doc']==2){
	header("Content-Disposition: filename=Puntajes.xls"); 
}
header("Pragma: no-cache");
header("Expires: 0"); 
echo $_POST['datos_a_enviar']; 
?> 
</body>
</html>