Confeccionar una página de Contacto que presente un formulario para que los visitantes
puedan enviar consultas al webmaster. 
<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacto</title>

    <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>

    <form action="enviar.php" method="post">
    <h1>Envie su consulta</h1>
        <fieldset>
            <p><label>  <input placeholder="nombre" type="text" name="nombre" size="25" /> </label></p><br>
            <p><label> <input  placeholder="correo electrónico" type="email" name="email"  size="25" /> </label></p><br>
            <p><label>  <input placeholder="asunto" type="text" name="asunto" size="25" /> </label></p><br>
            <p><label><textarea placeholder="descripción" name="mensaje" cols="32" rows="6"></textarea></label></p><br>
            <input type="submit" value="Enviar"/>
        </fieldset>
    </form>

</body>
</html>
