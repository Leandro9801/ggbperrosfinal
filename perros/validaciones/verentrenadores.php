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
            <table class="tbproductos">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>CONTRASEÑA</th>
                    <th>ELIMINAR</th>
                </tr>
                <tr>
                    <?php
                    include "conexion.php";

                    $todos_datos = "SELECT * FROM entrenadores ORDER BY id ASC";

                    $resultado = mysqli_query($conectar, $todos_datos);

                    while ($fila = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <td><?php echo $fila["id"]; ?></td>
                        <td><?php echo $fila["nombre"]; ?></td>
                        <td><?php echo $fila["correo"]; ?></td>
                        <td><?php echo $fila["contrasena"]; ?></td>
                        <td><a href="#" onClick="validar('eliminar.php?id=<?php echo $fila["id"]; ?>')"><i class='bx bx-trash'></i></a></td>
                </tr>
            <?php
                    }
            ?>
            </table>
        </div>
    </section>
    <script src="script.js"></script>
    <script>
        function validar(url) {
            var eliminar = confirm("¿Realmente deseas ELIMINAR EL USUARIO?");
            if (eliminar) {
                window.location = url;
            }
        }
    </script>
</body>

</html>