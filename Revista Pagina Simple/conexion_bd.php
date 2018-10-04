<?php
	/*$mysqli = new mysqli('127.0.0.1', 'admin', 'admin123', 'mi_revista');
	var_dump($mysqli);
	$mysqli -> set_charset("utf8");
	$query = $mysqli -> query("SELECT * FROM test");
	echo "BanderaSalvaje";*/

	$mysqli = new mysqli('127.0.0.1', 'root', '', 'mi_revista');
	$mysqli -> set_charset("utf8");
	$queryCiudad = $mysqli -> query("SELECT * FROM ciudad");	
	$queryRevista = $mysqli -> query("SELECT * FROM revista");
?>