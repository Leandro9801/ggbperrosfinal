<?php
session_start();
if ($_SESSION["validar"] != "si") {
  header("Location:login.php");
  exit();
}
