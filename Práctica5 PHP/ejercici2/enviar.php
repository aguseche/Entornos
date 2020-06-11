<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$nombre=$_POST['nombre'];
$email=$_POST['email']; 
$destino='dbdamix@gmail.com';
$asunto=$_POST['asunto'];
$mensage= "

Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Consulta: $_POST[mensaje]\n
Enviado: $fecha a las $hora\n
";
$header="From: $email"  ."\r\n";
$header.="X-Mailer: PHP/".phpversion();

$a=mail($destino,$asunto,$mensage,$header);
if($a){
echo "<h4>Consulta enviado correctamente</h4>";
}
?>