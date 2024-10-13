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