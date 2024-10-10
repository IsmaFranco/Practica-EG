<?php
session_start(); 
if (!isset($_SESSION['contador_visitas'])) {
    $_SESSION['contador_visitas'] = 0; 
}


$_SESSION['contador_visitas']++;


echo "Páginas visitadas en esta sesión: " . $_SESSION['contador_visitas'];
?>