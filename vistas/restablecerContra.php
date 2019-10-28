<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>FoodTec!</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<style type="text/css">
			body {
				margin: 0;
				padding: 0;
				background: url('../img/FONDO.jpg');
				background-size: cover;
				font-family: 'Montserrat';
				height: 100vh;
			}
		</style>
	</head>
	<body class="login">
		<div class="login-contenedor">
			<img src="../img/logo2.png" class="avatar" alt="avatar image">
			<h1>Restablecer contraseña</h1>
			<form method="post" action="modelos/restablecerContrasena.php">
				<label for="username">Correo electr&oacute;nico</label>
				<input type="text" name="correo" placeholder="correo electronico" required>
                <style>
                    .mensaje{font-weight: normal; color: #ccc;}
                </style>
                <h5 class="mensaje"> Un correo electrónico será envíado con las instrucciones para cambiar su contraseña.</h5><br>
                
				<input type="submit" value="entrar">
			</form>
		</div>
		
	</body>
</html>