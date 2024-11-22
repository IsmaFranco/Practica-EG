<?php
session_start();
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  include ("conexion.inc");
  $mail = $_POST['mail'];
  $vSql = "select * FROM alumnos WHERE mail ='$mail' ";
  $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
  $fila = mysqli_fetch_array($vResultado);
  if (mysqli_num_rows($vResultado) == 0) {
    echo ("Alumno Inexistente...!!! <br>");
  } else {

    $_SESSION['alumno'] = $fila['Nombre'];
  }
  ?>
  <a href="pagina3.php">Ingresar a pagina principal</a>;
</body>

</html>