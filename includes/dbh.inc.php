<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
$servername= "localhost:8012";
$dBUsername= "root";
$dBPassword= "";
$dBName ="ivannsbd";


	$conn= mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

	if (!$conn) {
		die("Connection Failed: ".mysqli_connect_error());
	}

?>
