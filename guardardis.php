<?php
	
	$cedula=$_POST["ced"];
	$nombre=$_POST["nom"];
	$direccion=$_POST["dir"];

	$db = mysql_connect("localhost", "root","");
	mysql_select_db("securityon",$db);
	$sql ="insert into distribuidores value('$cedula','$nombre','$direccion')";
	$result = mysql_query($sql);
	
?>

<h1>Distribuidor Creado correctament</h1>

<a href="sid.html">Regresar</a>