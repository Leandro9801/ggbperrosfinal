<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <!-- BOX ICONS -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <title>Entrenador de Perros</title>
</head>

<body>
  <?php
  include "header.php";
  ?>
  <div class="bannerwrapper">
    <div class="ancho">
      <div class="textobanner">
        <h1>DOG CAMP</h1>
        <h3>Entrenamiento de perros</h3>
      </div>
    </div>
  </div>
  <div class="acercadewrapper ancho">
    <div class="imagenes">
      <div class="flex">
        <img src="img/acerca.jpg" alt="dog" />
      </div>
    </div>
    <div class="textoacercade">
      <h2>Acerca de...</h2>
      <p>
        DOG CAMP es una empresa con presencia de adiestradores en GUADALAJARA,
        CIUDAD DE MEXICO, MONTERREY y YUCATÁN, nuestro fin es que nuestros
        clientes y sus perros tengan una vida mas tranquila logrando su perros
        sea Limpios Tranquilos y Obedientes.
      </p>
    </div>
  </div>
  <div class="mapa">
    <div class="textomapa">
      <h2>Encuentranos en...</h2>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7448.329847766053!2d-89.51907593022462!3d21.02608600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5679f770271879%3A0x5097c5bb1c028490!2sInstincts%20Dog%20Camp!5e0!3m2!1ses!2smx!4v1670489194995!5m2!1ses!2smx" width="700" height="300" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="horarioswrapper">
    <div class="ancho">
      <h2>Horarios de atención.</h2>
      <table>
        <tr>
          <th>Lunes</th>
          <th>Martes</th>
          <th>Miercoles</th>
          <th>Jueves</th>
          <th>Viernes</th>
          <th>Sabado</th>
          <th>Domingo</th>
        </tr>
        <tr>
          <td>De 9:00am a 9:00pm</td>
          <td>De 9:00am a 9:00pm</td>
          <td>De 9:00am a 9:00pm</td>
          <td>De 9:00am a 9:00pm</td>
          <td>De 9:00am a 9:00pm</td>
          <td>Cerrado</td>
          <td>Cerrado</td>
        </tr>
      </table>
    </div>
  </div>
  <?php
  include "footer.php";
  ?>
</body>

</html>