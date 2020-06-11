<?php

$nombre=$_POST['nombre'];
$email=$_POST['email']; 
$asunto="INVITACIÓN AL SITIO";
$mensage= "$_POST[nombre] te invita a que visites la pagina:https://egweb2020.000webhostapp.com/ej3/Compartir.php";
$header="From: $nombre"  ."\r\n";
$header.="X-Mailer: PHP/".phpversion();
$a=mail($email,$asunto,$mensage,$header);
if($a){
echo "<h4> Compartido correctamente</h4>";
}
?>