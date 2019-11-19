<?php
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$database = "bd_foodtec";
	
	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error) 
	    die("Fallo al conectar: " . $conn->connect_error());
?> 

