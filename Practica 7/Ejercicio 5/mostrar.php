<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
  header("Location: formulario.php");
  exit;
}

$username = $_SESSION['username'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Mostrar Cliente</title>
</head>

<body>
  <h1>Información del Cliente</h1>
  <p>Nombre de Usuario: <?php echo $username; ?></p>
  <p>Clave: <?php echo $password; ?></p>
</body>

</html>