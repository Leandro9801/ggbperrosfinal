<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <!-- BOX ICONS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Contactanos</title>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <div class="formulariocontactanos">
        <h2>Déjanos tus datos <br> ¡Nosotros te contactamos!</h2>
        <form class="formcontacto" action="enviar_correo.php" name="formulario" method="POST">
            <label>Nombre*</label> <br>
            <input type="text" id="nombre" name="nombre"> <br>
            <label>Curso*</label> <br>
            <select name="curso" id="curso">
                <option value="">--Selecciona--</option>
                <?php
                include "validaciones/conexion.php";

                $todos_datos = "SELECT * FROM cursos ORDER BY id ASC";

                $resultado = mysqli_query($conectar, $todos_datos);

                while ($fila = mysqli_fetch_assoc($resultado)) {
                ?>
                    <option value="<?php echo $fila["nombre"]; ?>"><?php echo $fila["nombre"]; ?></option>
                <?php
                }
                ?>
            </select> <br>
            <label>Entrenador*</label> <br>
            <select name="entrenador" id="entrenador">
                <option value="">--Selecciona--</option>
                <?php
                include "validaciones/conexion.php";

                $todos_datos = "SELECT * FROM entrenadores ORDER BY id ASC";

                $resultado = mysqli_query($conectar, $todos_datos);

                while ($fila = mysqli_fetch_assoc($resultado)) {
                ?>
                    <option value="<?php echo $fila["nombre"]; ?>"><?php echo $fila["nombre"]; ?></option>
                <?php
                }
                ?>
            </select> <br>
            <label>Descripcion*</label> <br>
            <textarea name="descripcion" id="descripcion"></textarea> <br>
            <label>Número de teléfono*</label> <br>
            <input type="tel" id="numero" name="numero"> <br>
            <input type="button" id="btncontacto" value="Enviar" onclick="valida_formulario()">
        </form>
    </div>
    <?php
    include "footer.php";
    ?>
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
            } else if (document.getElementById("numero").value.length == 0) {
                alert("Ingresa un numero");
                document.getElementById("numero").focus();
                return 0;
            }
            // alert("Datos enviados :)");
            document.formulario.submit();

        }
    </script>
</body>

</html>