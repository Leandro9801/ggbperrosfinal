<?php
  require "conexion.php";
  $id = $_GET['id'];

  $eliminar = "DELETE FROM entrenadores WHERE id='$id'";
  $resultado = mysqli_query($conectar,$eliminar);

  if($resultado){
    header("location: verentrenadores.php");
  } else {
    echo "No se pudo eliminar el dato";
  }