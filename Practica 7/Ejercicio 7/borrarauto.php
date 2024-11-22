<?php
session_start();
extract($_GET);
$auto = $_SESSION['auto'];
unset($auto[md5($id)]);
$_SESSION['auto'] = $auto;
header("Location: catalogo.php?" . SID);
?>