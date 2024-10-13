<head>
    <title>Modificacion</title>
</head>
<body>
    <?php
    include("conexion.inc");
    // Captura datos desde el Form anterior
    $vCiudad = $_POST['ciudad'];
    $vPais = $_POST['pais'];
    $vHabitantes = $_POST['habitantes'];
    $vSuperficie = $_POST['superficie'];
    $vTieneMetro = $_POST['tieneMetro'];
    // Arma la instrucción SQL y luego la ejecuta
    $vSql = "UPDATE ciudades SET legajo='$vClave', apel_nom='$vUsuario', email='$vEmail' WHERE dni='$vDNI'";
    mysqli_query($link, $vSql) or die(mysqli_error($link));
    echo("El Usuario fue Modificado<br>");
    echo("<a href='Menu.html'>Volver al Menu del ABM</a>");
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>
</html>
