<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $headlineType = $_POST['headlineType'];
  setcookie('headlineType', $headlineType, time() + (86400 * 30), "/");
} else {
  if (isset($_COOKIE['headlineType'])) {
    $headlineType = $_COOKIE['headlineType'];
  } else {
    $headlineType = 'all';
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Periódico</title>
</head>

<body>
  <h1>Periódico</h1>
  <form method="post" action="noticias.php">
    <label><input type="radio" name="headlineType" value="politics" <?php if ($headlineType == 'politics')
      echo 'checked'; ?>> Noticia política</label><br>
    <label><input type="radio" name="headlineType" value="economy" <?php if ($headlineType == 'economy')
      echo 'checked'; ?>> Noticia económica</label><br>
    <label><input type="radio" name="headlineType" value="sports" <?php if ($headlineType == 'sports')
      echo 'checked'; ?>>
      Noticia deportiva</label><br>
    <label><input type="radio" name="headlineType" value="all" <?php if ($headlineType == 'all')
      echo 'checked'; ?>> Todas
      las noticias</label><br>
    <input type="submit" value="Configurar">
  </form>

  <h2>Titulares</h2>
  <?php
  if ($headlineType == 'all' || $headlineType == 'politics') {
    echo "<p>Noticia política: La política está cambiando rápidamente.</p>";
  }
  if ($headlineType == 'all' || $headlineType == 'economy') {
    echo "<p>Noticia económica: La economía global se está recuperando.</p>";
  }
  if ($headlineType == 'all' || $headlineType == 'sports') {
    echo "<p>Noticia deportiva: El equipo local ganó el campeonato.</p>";
  }
  ?>

  <p><a href="borrar_cookie.php">Borrar preferencia de titulares</a></p>
</body>

</html>