<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	require_once 'conexionOO.php';
    $nombre = $_SESSION['nombre'];

		$direccion = $_GET["direccion"];
		$telefono = $_GET["telefono"];
		$query = "update restaurante set telefono='$telefono',
			      direccion='$direccion' where nombre=$nombre";
		$result = $conn->query($query) or die($conn->error.__LINE__);
		echo "Informacion actualizada correctamente";
?>
