<html>

<head>
  <title>Baja</title>
</head>

<body>
  <?php
  include ("conexion.inc");
  $vId = $_POST['id'];
  $vSql = "SELECT * FROM ciudades WHERE id='$vId' ";
  $vResultado = mysqli_query($link, $vSql);
  if (mysqli_num_rows($vResultado) == 0) {
    echo ("Ciudad Inexistente...!!! <br>");
    echo ("<A href='baja.html'>Continuar</A>");
  } else {
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "DELETE FROM ciudades WHERE id = '$vId' ";
    mysqli_query($link, $vSql);
    echo ("La ciudad fue Borrada<br>");
    echo ("<A href='menu.html'>Volver al Menu</A>");
  }
  //Liberar conjunto de resultados
  mysqli_free_result($vResultado);
  //Cerrar conexión
  mysqli_close($link);
  ?>
</body>

</html>