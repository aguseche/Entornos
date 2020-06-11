<?php
session_start();
?>
<html>
<body>
<?php
if (!isset($_SESSION["contador"])){
 $_SESSION["contador"] = 1;
}else{
 $_SESSION["contador"]++;
} ?>
<a href= "cuentPag.php">Contador de Páginas</a><br><br>
<a href="otrapag.php">Página2</a>
</body>
</html>