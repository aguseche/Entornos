<html>
    <head>
    <title>Alta Usuario</title>
    </head>
<body>
<?php
    include("conexion.inc");
    //Captura datos desde el Form anterior
    $vciudad = $_POST['ciudad'];
    $vpais = $_POST['pais'];
    $vhabitantes = $_POST['habitantes'];
    $vsuperficie = $_POST['superficie'];
    $vmetro = $_POST['metro'];
    
    $vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie,tieneMetro)
    values ('$vciudad','$vpais', '$vhabitantes', '$vsuperficie', '$vmetro')";
    mysqli_query($link, $vSql) or die (mysqli_error($link));
    echo("<p style='text-align: center;'>Ciudad Registrada<br /> <a href='menu.html'>Volver al Menu</a></p>");
        // Liberar conjunto de resultados
    //mysqli_free_result($vResultado);
//}
// Cerrar la conexion

mysqli_close($link);

?></body></html>