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
            font-family: 'Montserrat';
            height: 100vh;
        }
    </style>
     <script src="js/jquery/jquery-3.4.1.js"></script>
</head>s

<body class="login">
    <div class="login-contenedor">
        <img src="img/logo2.png" class="avatar" alt="avatar image">
        <h1>¡Bienvenido!</h1>
            <form id="login">
                <label for="username">Usuario</label>
                <input type="text" name="usuario" placeholder="ingresa tu usuario" required>
                <label for="password">Contraseña</label>
                <input type="password" name="contra" required placeholder="ingresa tu contraseña">
                <input type="submit" value="entrar">
                <a href="vistas/restablecerContra.php">¿olvidaste tu contraseña?</a>
                <br>
            </form>
    </div>
</body>
<script type="text/javascript">
    $(document).on("submit", "#login", function(evento) {
        evento.preventDefault();
        $.post("modelos/validar.php", $("#login").serialize(), function(respuesta) {
            if (respuesta.trim() == "si") {
                location.href = "vistas/home.php";
            } else {
                alert(respuesta);
            }
        });
    });
</script>

</html>
