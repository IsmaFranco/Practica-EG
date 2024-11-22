<?php
setcookie('headlineType', '', time() - 3600, "/");
header("Location: noticias.php");
exit;