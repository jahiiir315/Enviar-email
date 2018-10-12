<?php 

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = "geminis31_98@hotmail.com";
$asunto = "Contacto desde la web";

$carta = "De: ".$nombre." \n"; 
$carta .= "Correo: ".$correo." \n";
$carta .= "Telefono: ".$telefono." \n";
$carta .= "Mensaje: ".$mensaje." \n";


mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html')
 ?>
