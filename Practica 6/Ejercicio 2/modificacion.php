<head>
  <title>Modificacion</title>
</head>

<body>
  <?php
  include ("conexion.inc");
  //Captura datos desde el Form anterior
  $vId = $_POST['id'];
  $vCiudad = $_POST['city'];
  $vPais = $_POST['country'];
  $vHabitantes = $_POST['populations'];
  $vSuperficie = $_POST['area'];
  $vTieneMetro = $_POST['bus'];
  //Arma la instrucción SQL y luego la ejecuta
  $vSql = "UPDATE ciudades set city='$vCiudad', country='$vPais', populations='$vHabitantes', area='$vSuperficie', bus='$vTieneMetro' where id='$vId'";
  mysqli_query($link, $vSql) or die(mysqli_error($link));
  echo ("La ciudad fue Modificada<br>");
  echo ("<A href= 'menu.html'>Volver al Menu del ABM</A>");
  // Cerrar la conexion
  mysqli_close($link);
  ?>
</body>

</html>