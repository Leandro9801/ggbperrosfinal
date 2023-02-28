<?php
require "conexion.php";
$id = $_GET['id'];
$selectRuta = "SELECT ruta FROM cursos WHERE id='$id'";
$resultadoeliminar = mysqli_query($conectar, $selectRuta);
$dato = mysqli_fetch_assoc($resultadoeliminar);

$rutaeliminar = "../" . $dato["ruta"];

$eliminar = "DELETE FROM cursos WHERE id='$id'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado == true) {
    unlink($rutaeliminar);
    header("location: vercursos.php");
} else {
    echo "No se pudo eliminar el dato";
}
