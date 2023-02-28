<?php
  include "conexion.php";

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  $insertar = "INSERT INTO entrenadores(nombre,correo,contrasena)VALUES('$nombre','$correo','$contrasena')";

  $verificar_usuario = mysqli_query($conectar,"SELECT * FROM entrenadores WHERE correo = '$correo'");

  if(mysqli_num_rows($verificar_usuario)){
    echo '<script>
    alert("Este usuario ya existe");
    location.href("paginaagregarusuarios.php");
    </script>';
  } else {
    $query = mysqli_query($conectar,$insertar);
  }

  if($query){
    echo '<script>
    alert("SE GUARDARON LOS DATOS EXITOSAMENTE");
    location = "entrenadores.php";
    </script>';
  } else {
    echo '<script>
    alert("NO SE GUARDARON LOS DATOS");
    location = "entrenadores.php";
    </script>';
  }
?>