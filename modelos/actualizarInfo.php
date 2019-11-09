<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	session_start();
	require_once 'conexionOO.php';
    $nombre = $_SESSION['nombre'];

		$direccion = $_POST["direccionMod"];
		$telefono = $_POST["telefonoMod"];

    if($direccion != "" && $telefono != ""){
    
		$query = "update restaurante set telefono='$telefono',
			      direccion='$direccion' where nombre='$nombre'";

        if(mysqli_query($conn,$query)) {
            header('Location: ../vistas/perfil.php');
        } else {
            $respuesta = "Error: " .$query."<br>".mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        $respuesta = "Telefono y direccion vacios";
    }
        
?>    
        