<html>
    <head>
        <title> Capitales-Listado </title>
    </head>
    <body>
        <?php
        include("conexion.inc");
        $vSql = "SELECT * FROM ciudades";
        $vResultado = mysqli_query($link, $vSql);
        $total_registros=mysqli_num_rows($vResultado);
        ?>
        <table style="margin-left: auto; margin-right: auto;" border=1>
            <tr>
                <td><b>ID</b></td>
                <td><b>CIUDAD</b></td>
                <td><b>PAIS</b></td>
                <td><b>HABITANTES</b></td>
                <td><b>SUPERFICIE</b></td>
                <td><b>METRO</b></td>

            </tr>
            <?php
            while ($fila = mysqli_fetch_array($vResultado))
            {
            ?>
            <tr>
                <td><?php echo ($fila['id']); ?></td>
                <td><?php echo ($fila['ciudad']); ?></td>
                <td><?php echo ($fila['pais']); ?></td>
                <td><?php echo ($fila['habitantes']); ?></td>
                <td><?php echo ($fila['superficie']); ?></td>
                <td><?php echo ($fila['tieneMetro']); ?></td>
            </tr>
            <tr>
                 <td colspan="6">
                    <?php
                    }
                    // Liberar conjunto de resultados
                    mysqli_free_result($vResultado);
                    // Cerrar la conexion
                    mysqli_close($link);
                    ?>
                 </td>
            </tr>
        </table>
        <p>&nbsp;</p>
        <p align="center"><a href="menu.html">Volver al menu</a></p>
    </body>
</html>