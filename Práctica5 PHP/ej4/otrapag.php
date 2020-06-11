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
<a href="cuenta.php">Página1</a><br><br>
<a href= "cuentPag.php">Contador de Páginas</a>
</body>
</html>