<html>
<head>
    <title>Baja</title>
</head>
<body>
    <?php
    include ("conexion.inc");
    $vCiudad = $_POST ['ciudad'];
    $vSql = "SELECT * FROM ciudades WHERE ciudad='$vCiudad' ";
    $vResultado = mysqli_query($link, $vSql);
    if(mysqli_num_rows($vResultado) == 0){
        echo ("Ciudad inexistente!!! <br>");
        echo ("<A href='FormBajaIni.html'>Continuar</A>");
    } else{
    //Arma la instrucción SQL y luego la ejecuta
        $vSql= "DELETE FROM ciudades WHERE ciudad = '$vCiudad' ";
        mysqli_query($link, $vSql);
        echo("La ciudad fue borrada<br>");
        echo("<A href='Menu.html'>Volver al men&uacute; del ABM</A>");
    }
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    // Cerrar la conexion
    mysqli_close($link);
    ?>
</body>
</html>