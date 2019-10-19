<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>FoodTec!</title>
		<link rel="stylesheet" href="css/estilos.css">
		<style type="text/css">
			body {
				margin: 0;
				padding: 0;
				background: url('img/FONDO.jpg');
				background-size: cover;
				font-family: sans-serif;
				height: 100vh;
			}
		</style>
	</head>
	<body class="login">
		<div class="login-contenedor">
			<img src="img/logo2.png" class="avatar" alt="avatar image">
			<h1>¡bienvenido!</h1>
			<form method="post" action="modelos/validar.php">
				<label for="username">usuario</label>
				<input type="text" name="usuario" placeholder="ingresa tu usuario">
				<label for="password">contraseña</label>
				<input type="password" name="contra" placeholder="ingresa tu contraseña">
				<input type="submit" value="entrar">
				<a href="#">¿olvidaste tu contraseña?</a><br>
			</form>
		</div>
		
	</body>
</html>