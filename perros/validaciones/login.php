<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- STYLES CSS -->
  <link rel="stylesheet" href="login-style.css" />
  <link rel="stylesheet" href="../style.css">
  <!-- BOX ICONS -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Login</title>
</head>

<body>
  <?php
  include "header.php";
  ?>

  <div class="contenedorform">
    <form action="iniciarsesion.php" method="POST" class="formulario" name="formulario">
      <h3>Iniciar Sesión</h3>
      <?php
      $errorusuario = isset($_GET["errorusuario"]);
      if ($errorusuario == "SI") {
        echo "<h3 style='color:red;'>Datos Incorrectos</h3>";
      }
      ?>
      <label for="nombre">Usuario</label> <br />
      <div class="wave-group">
        <input type="text" class="input" id="nombre" name="nombre" placeholder="Usuario" />
        <span class="bar"></span><br>
      </div>
      <label for="contrasena">Contraseña</label> <br />
      <div class="wave-group">
        <input type="password" class="input" id="contrasena" name="contrasena" placeholder="Contraseña" />
        <span class="bar"></span> <br>
      </div>

      <input type="button" id="btn" value="Iniciar Sesión" onClick="valida_formulario()" />
    </form>
  </div>
  <?php
  include "footer.php";
  ?>
  <script>
    document.addEventListener("keyup", function(event) {
      if (event.keyCode == 13) {
        valida_formulario();
      }
    });

    function valida_formulario() {
      if (document.getElementById("nombre").value.length == 0) {
        alert("Escribe tu nombre");
        document.getElementById("nombre").focus();
        return 0;
      } else if (document.getElementById("contrasena").value.length == 0) {
        alert("Escribe tu Contraseña");
        document.getElementById("contrasena").focus();
        return 0;
      }
      document.formulario.submit();
    }
  </script>
</body>

</html>