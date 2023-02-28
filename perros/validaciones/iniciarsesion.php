<?php
require "conexion.php";

$nombre = addslashes($_POST["nombre"]);
$contrasena = addslashes($_POST["contrasena"]);

// echo $nombre . $contrasena;


$comparar = "SELECT * FROM entrenadores WHERE nombre = '$nombre' AND contrasena = '$contrasena' ";

$resultado = mysqli_query($conectar, $comparar);

if (mysqli_num_rows($resultado) > 0) {
  session_start();
  $_SESSION['validar'] = "si";
  header("Location:panel.php");
} else {
  echo "
  <script>
    alert('ERROR EN LA AUTENTIFICACION');
    location.href = 'login.php?errorusuario=SI';
  </script>
  ";
}
mysqli_free_result($resultado);
mysqli_close($conectar);
