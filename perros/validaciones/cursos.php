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
    <title>Cursos</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <section class="home">
        <div class="containerwhite">
            <div class="text">Cursos</div>
            <div class="btnagregar">
                <a href="cursos.php">Agregar Cursos</a>
                <a href="vercursos.php" class="btnverproductos">Ver Cursos</a>
            </div>
            <br>
            <form class="formularioagregar" action="agregarcurso.php" name="formulario" method="POST" enctype="multipart/form-data">
                <label>Nombre del curso</label> <br>
                <input type="text" id="nombre" name="nombre"> <br>
                <label>Descripcion del curso</label> <br>
                <input type="text" id="descripcion" name="descripcion"> <br>
                <label>Precio del curso</label> <br>
                <input type="text" id="precio" name="precio"> <br>
                <label class="texto">Subir foto del curso:</label>
                <input class="campo" type="file" name="imagen"><br>
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
                alert("Escribe el nombre del curso");
                document.getElementById("nombre").focus();
                return 0;
            } else if (document.getElementById("descripcion").value.length == 0) {
                alert("Ingresa una descripcion");
                document.getElementById("descripcion").focus();
                return 0;
            } else if (document.getElementById("precio").value.length == 0) {
                alert("Ingresa un precio");
                document.getElementById("precio").focus();
                return 0;
            }
            document.formulario.submit();
        }
    </script>
</body>

</html>