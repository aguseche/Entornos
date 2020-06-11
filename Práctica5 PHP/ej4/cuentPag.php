<?php
session_start();
?>
<html>
<body>
<a href="cuenta.php"></a>
<?php
echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
?>
<br>
<br>
<a href="cuenta.php">Página1</a><br><br>
<a href="otrapag.php">Página2</a>
</body>
</html>