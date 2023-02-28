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
    <title>Ver Cursos</title>
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
            <table class="tbproductos">
                <tr>
                    <th>ID</th>
                    <th>FOTO</th>
                    <th>NOMBRE CURSO</th>
                    <th>DESCRIPCION</th>
                    <th>PRECIO</th>
                    <th>ELIMINAR</th>
                </tr>
                <tr>
                    <?php
                    include "conexion.php";

                    $todos_datos = "SELECT * FROM cursos ORDER BY id ASC";

                    $resultado = mysqli_query($conectar, $todos_datos);

                    while ($fila = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <td><?php echo $fila["id"]; ?></td>
                        <td><img src="../<?php echo $fila["ruta"]; ?>" class="titulofoto" alt="cursofoto"></td>
                        <td><?php echo $fila["nombre"]; ?></td>
                        <td><?php echo $fila["descripcion"]; ?></td>
                        <td><?php echo $fila["precio"]; ?></td>
                        <td><a href="#" onClick="validar('eliminarcurso.php?id=<?php echo $fila["id"]; ?>')"><i class='bx bx-trash'></i></a></td>
                </tr>
            <?php
                    }
            ?>
            </table>
        </div>
        <script>
            function validar(url) {
                var eliminar = confirm("¿Realmente deseas ELIMINAR EL PRODUCTO?");
                if (eliminar) {
                    window.location = url;
                }
            }
        </script>
</body>

</html>