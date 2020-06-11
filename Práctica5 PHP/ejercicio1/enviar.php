<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$nombre=$_POST['nombre'];
$destino=$_POST['email']; 
$asunto=$_POST['asunto'];
$mensage= $_POST['mensaje'];
$header="From: mail@example.com"."\r\n";
$header.="X-Mailer: PHP/".phpversion();
$a=mail($destino,$asunto,$mensage,$header);
if($a){
echo "<h4>Mail enviado correctamente</h4>";
}
?>