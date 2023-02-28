<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <!-- BOX ICONS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Paquetes</title>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <h2 class="paq ancho">CONOCE NUESTROS CURSOS</h2>
    <div class="menudb">

        <?php
        include "validaciones/conexion.php";

        $todos_datos = "SELECT * FROM cursos ORDER BY id ASC";

        $resultado = mysqli_query($conectar, $todos_datos);

        while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="wrapperdb">
                <img src="<?php echo $fila["ruta"]; ?>" alt="curso">
                <p class="name"><?php echo $fila["nombre"]; ?></p>
                <p class="description"><?php echo $fila["descripcion"]; ?></p>
                <p class="prize">$<?php echo $fila["precio"]; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>