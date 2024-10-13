<html>
<head>
    <title>Alta Ciudades</title>
</head>
<body>
    <?php
        include("conexion.inc");
    //Captura datos desde el Form anterior
        $vCiudad = $_POST['ciudad'];
        $vPais = $_POST['pais'];
        $vHabitantes = $_POST['habitantes'];
        $vSuperficie = $_POST['superficie'];
        $vTieneMetro = $_POST['tieneMetro'];
    //Arma la instrucción SQL y luego la ejecuta
        $vSql = "SELECT Count(ciudad) as cantCiu FROM ciudades WHERE ciudad='$vCiudad'";
        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));
        $vCantCiudades = mysqli_fetch_assoc($vResultado);
    //$vCantCiudades = mysqli_result($vResultado, 0);
        if ($vCantCiudades ['cantCiu']!=0){
        echo ("La ciudad ya existe <br>");
        echo ("<A href='Menu.html'> Volver al ABM </A>");
        }
        else {
        $vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro) values ('$vCiudad','$vPais', '$vHabitantes', '$vSuperficie','$vTieneMetro')";
        mysqli_query($link, $vSql) or die (mysqli_error($link));
        echo("La ciudad fue registrada<br>");
        echo ("<A href='Menu.html'> Volver al menu </A>");
    // Liberar conjunto de resultados
        mysqli_free_result($vResultado);
        }
    // Cerrar la conexion
        mysqli_close($link);
?>
</body>
</html>