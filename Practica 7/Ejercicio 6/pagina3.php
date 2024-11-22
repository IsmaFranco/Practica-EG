<?php
session_start();
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if (isset($_SESSION['alumno'])) {
    echo "Bienvenido " . $_SESSION['alumno'];
  } else {
    echo "No tiene permitido visitar esta página.";
  }
  session_destroy();
  ?>
</body>

</html>