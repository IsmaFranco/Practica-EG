<?php
session_start();
extract($_REQUEST);
$link = mysqli_connect("localhost", "root", "marco");
mysqli_select_db($link, "auto");
if (!isset($cantidad)) {
  $cantidad = 1;
}

$qry = mysqli_query($link, "select * from catalogo where id='" . $id . "'");
$row = mysqli_fetch_array($qry);

if (isset($_SESSION['auto'])) {
  $auto = $_SESSION['auto'];
}

$auto[md5($id)] = array(
  'identificador' => md5($id),
  'cantidad' => $cantidad,
  'producto' => $row['producto'],
  'precio' => $row['precio'],
  'id' => $id
);

$_SESSION['auto'] = $auto;
header("Location: catalogo.php?" . SID);
?>