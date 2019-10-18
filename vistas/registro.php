<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registrar usuario</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <form class="box" id="registro" name="datosgenerales">
        <h1>Registro de usuario</h1>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellidos" placeholder="Apellido(s)" required>

        <input type="text" name="username" placeholder="Nombre de usuario" required>

        <input type="password" name="contrasena" id="cont1" placeholder="Contrase&ntilde;a" required>

        <input type="password" name="contrasena2" id="cont2" placeholder="Repita la contrase&ntilde;a" required>

        <script>
            function comprobarClave() {
                var c1 = document.getElementById("cont1").value;
                var c2 = document.getElementById("cont2").value;

                if (c1 != c2) {
                    alert("la contraseña no coincide");
                }
            }

        </script>

        <select name="tipoUser">
            <option value="">Seleccione tipo de usuario</option>
            <option value="GENERAL">General</option>
            <option value="ADMINISTRADOR">Administrador</option>
        </select>
       
        <input type="submit" value="Registrar" onclick="comprobarClave()">
    </form>
</body>
<script src="../js/demo.js"></script>
<script type="text/javascript">
    $(document).on("submit", "#registro", function(evento) {
        evento.preventDefault();
        $.post("../modelos/valida_login.php", $("#registro").serialize(), function(respuesta) {
            if (respuesta.trim() == "si") {
                location.href = "../index.php";
            } else {
                alert(respuesta);
            }
        });
    });
</script>

</html>
