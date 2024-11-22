<html>

<head>
  <title>Alta Usuario</title>
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
  $vSql = "SELECT Count(id) as cantidad FROM ciudades WHERE id='$vId'";
  $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
  ;
  $vCantUsuarios = mysqli_fetch_assoc($vResultado);
  //$vCantCiudades = mysqli_result($vResultado, 0);
  if ($vCantCiudades['cantidad'] != 0) {
    echo ("La ciudad ya Existe<br>");
    echo ("<A href='menu.html'>VOLVER AL ABM</A>");
  } else {
    $vSql = "INSERT INTO ciudades (id, city, country, populations, area, bus)
    values ('$vId','$vCiudad', '$vPais', '$vHabitantes', '$vSuperficie', '$vTieneMetro')";
    mysqli_query($link, $vSql) or die(mysqli_error($link));
    echo ("La ciudad fue Registrada<br>");
    echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
  }
  // Cerrar la conexion
  mysqli_close($link);
  ?>
</body>

</html>