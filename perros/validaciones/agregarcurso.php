<?php
  include "conexion.php";

  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  /////////////////////////////////////////

  $rutaEnServidorphp = '../cursos';
  $rutaEnServidor = 'cursos';
  $rutaTemporal = $_FILES['imagen']['tmp_name'];
  $nombreImagen = $_FILES['imagen']['name'];
  $pesofoto = $_FILES['imagen']['size'];
  $tipoarchivo = $_FILES['imagen']['type'];

  date_default_timezone_set('UTC');
  $nombreimagenunico = date('Y-m-d-h-i-s')."-".$nombreImagen;

  $rutaDestino = $rutaEnServidorphp."/".$nombreimagenunico;
  $rutaMostrar = $rutaEnServidor."/".$nombreimagenunico;

  if($pesofoto > 8000000){
    echo '<script>
      alert("El archivo es muy GRANDE");
      window.history.go(-1);
    </script>';
    exit;
  }

  if($tipoarchivo == "image/jpg" or $tipoarchivo == "image/png" or $tipoarchivo == "image/gif" or $tipoarchivo == "image/jpeg" or $tipoarchivo == "image/webp" or $tipoarchivo == "image/svg"){
    move_uploaded_file($rutaTemporal, $rutaDestino); //escribe la foto de la carpeta creada
  } else {
    if($tipoarchivo == NULL){
      echo '<script>
        alert("Seleccione un archivo");
        window.history.go(-1);
      </script>';
      exit;
    } else{
      echo '<script>
        alert("Inserte solo archivos válidos");
        window.history.go(-1);
      </script>';
      exit;
    }
  }

  $insertar = "INSERT INTO cursos (ruta,nombre,precio,descripcion) VALUES ('$rutaMostrar','$nombre','$precio','$descripcion')";
  $resultado = mysqli_query($conectar,$insertar);

  if($resultado){
    echo '
    <script>
    alert("Se agregó el curso CORRECTAMENTE");
    location.href = "cursos.php";
    </script>';
  } else {
    echo '
    <script>
    alert("ERROR al agregar el curso");
    location.href = "cursos.php";
    </script>';
  }