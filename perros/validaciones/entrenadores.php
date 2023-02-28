<?php
require "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS STYLES -->
    <link rel="stylesheet" href="login-style.css">
    <link rel="stylesheet" href="cursos.css">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Entrenadores</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <section class="home">
        <div class="containerwhite">
            <div class="text">Entrenadores</div>
            <div class="btnagregar">
                <a href="entrenadores.php">Agregar Entrenadores</a>
                <a href="verentrenadores.php" class="btnverproductos">Ver Entrenadores</a>
            </div>
            <br>
            <form class="formularioagregar" action="agregarusuario.php" name="formulario" method="POST">
                <label>Usuario</label> <br>
                <input class="texto" type="text" placeholder="Nombre y apellido" id="nombre" name="nombre"> <br>
                <label>Correo</label> <br>
                <input class="texto" type="text" placeholder="Correo Electrónico" id="correo" name="correo"> <br>
                <label>Contraseña</label> <br>
                <input class="campo" type="password" id="contrasena" name="contrasena" placeholder="Debe tener al menos 6 caracteres"> <br>
                <input type="button" id="btnguardar" value="Guardar" onclick="valida_formulario()">
            </form>
        </div>
    </section>
    <script src="script.js"></script>
    <script>
        document.addEventListener("keyup", function(event) {
            if (event.keyCode == 13) {
                valida_formulario();
            }
        });

        function valida_formulario() {
            if (document.getElementById("nombre").value.length == 0) {
                alert("Escribe tu Nombre");
                document.getElementById("nombre").focus();
                return 0;
            } else if (document.getElementById("contrasena").value.length == 0) {
                alert("Escribe tu Contraseña");
                document.getElementById("contrasena").focus();
                return 0;
            } else if (document.getElementById("correo").value.length == 0) {
                alert("Escribe tu Correo");
                document.getElementById("correo").focus();
                return 0;
            } else if (document.getElementById("contrasena").value.length < 6) {
                alert("La contraseña debe tener al menos 6 caracteres");
                document.getElementById("contrasena").focus();
                return 0;
            }
            document.formulario.submit();
        }
    </script>
</body>

</html>