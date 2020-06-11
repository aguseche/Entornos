<head>
    <title>Modificacion</title>
</head>
<body>
    <?php
    include ("conexion.inc");
    //Captura datos desde el Form anterior
    $vCiudad = $_POST['ciudad'];
    $vPais = $_POST['pais'];
    $vHab = $_POST['habitantes'];
    $vSup = $_POST['superficie'];
    $vMetro = $_POST['metro'];
    $vid = $_POST['id'];
    //Arma la instrucción SQL y luego la ejecuta
    $vSql = "UPDATE ciudades set ciudad='$vCiudad', pais='$vPais', habitantes='$vHab', superficie='$vSup', tieneMetro='$vMetro' where id='$vid'";
    mysqli_query($link,$vSql) or die (mysqli_error($link));
    echo("<p style='text-align: center;'>Ciudad Modificada<br /> <a href='menu.html'>Volver al Menu</a></p>");
    // Cerrar la conexion
    mysqli_close($link);
?>
</body>
</html>