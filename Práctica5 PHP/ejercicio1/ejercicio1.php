//Escribir un script en PHP para poder enviar un correo electrónico, con formato HTML, a través del servidor.
<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Envio de Mail</title>

    <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
    <form action="enviar.php" method="post">
        <fieldset>
            <p><label>  <input placeholder="nombre" type="text" name="nombre" size="25" /> </label></p><br>
            <p><label> <input  placeholder="destinatario" type="email" name="email"  size="25" /> </label></p><br>
            <p><label>  <input placeholder="asunto" type="text" name="asunto" size="25" /> </label></p><br>
            <p><label><textarea placeholder="mensaje" name="mensaje" cols="32" rows="6"></textarea></label></p><br>
            <input type="submit" value="Enviar"/>
        </fieldset>
    </form>

</body>
</html>
