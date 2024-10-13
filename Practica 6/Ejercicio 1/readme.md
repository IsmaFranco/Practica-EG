# Ejercicio 1

Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función
#    mysqli_connect
………………………………………………………………………………………
Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
#    $hostname , $nombreUsuario , $contraseña
…………………………………………………………………………………………
Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función
#     mysqli_select_db (nombre_bdd)
…………………………………………………………………………………………
Esta función debe pasar como parámetro
#   el nombre de la base de datos.
……………………………………………………………………………………
La función mysqli_query () se utiliza para
#   ejecutar una consulta a la base de datos que especifiquemos.
………………………………………
y requiere como parámetros
#   ($nombreConexion,"Consulta aquí"); ó mysqli_query($nombreConexion, $query)
…………………………………………………………………………………………
La cláusula or die() se utiliza para
#    para detener la ejecución del codigo y mostrar un mensaje de error si algo falla.
………………………………………………
y la función mysqli_error () se puede usar para
#   devolver el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado
…………………………………………………………………………………………

Explicacion del codigo:
    <?php
    while ($fila = mysqli_fetch_array($vResultado))
    {
        ?>
        <tr>
            <td><?php echo ($fila[0]); ?></td>
            <td><?php echo ($fila[1]); ?></td>
            <td><?php echo ($fila[2]); ?></td>
        </tr>
        <tr>
            <td colspan="5">
        <?php
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>

# Este codigo se ejecuta luego de hacer una consulta @mysqli_query() y que esta haya sido exitosa. Lo que muestra es los valores de la variable $vResultado por medio de la posicion de filas de un array.