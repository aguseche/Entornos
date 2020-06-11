Escribir un script para que un visitante recomiende el sitio a un amigo. 
<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacto</title>

    <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>

    <form action="enviar.php" method="post">
    <h1>Comparta el sito con sus amigos</h1>
        <fieldset>    
        <p><label>  <input placeholder="ingrese su nombre" type="text" name="nombre" size="25" /> </label></p><br>  
            <p><label> <input  placeholder="compartir con...(email)" type="email" name="email"  size="25" /> </label></p><br>
            
            <input type="submit" value="Compartir"/>
        </fieldset>
    </form>

</body>
</html>
