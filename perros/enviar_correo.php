<?php

$destino = "correo@gmail.com";
$asunto = "Contacto desde el sitio web";
$nombre = $_POST["nombre"];
$celular = $_POST["celular"];
$curso = $_POST["curso"];
$entrenador = $_POST["entrenador"];
$descripcion = $_POST["descripcion"];
$numero = $_POST["numero"];
$contenido = "
	<b>Nombre :</b> " . $nombre . "<br><b>Telefono :</b> " . $numero . "<br><b>Curso :</b> " . $curso . "<br><b>Entrenador:</b> " . $entrenador . "<br><b>Descripción : </b> " . $descripcion;

// PARA QUE RECONOZCA LAS ETIQUETAS HTML

$encabezados  = "MIME-Version: 1.0" . "\r\n";
$encabezados .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// FUNCION MAIL Y REDIRECCIONAMIENTO
mail($destino, $asunto, $contenido, $encabezados);
header("Location: gracias.php");
