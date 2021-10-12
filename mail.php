<?php

if(!isset($_GET['nombre'])){  
    die('Necesita ingresar un nombre'); 
}

if(!isset($_GET['empresa'])){  
    die('Necesita ingresar una empresa'); 
}

if(!isset($_GET['email'])){ 
    die('Necesita ingresar un email'); 
}

if(!isset($_GET['telefono'])){ 
    die('Necesita ingresar un teléfono'); 
}

if(!isset($_GET['mensaje'])){ 
    die('Necesita ingresar un mensaje'); 
}


$nombre = $_GET['nombre'];
$empresa = $_GET['empresa'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
$mensaje = $_GET['mensaje'];


$to      = 'mail@gmail.com';
$subject = 'Consulta desde la web';
$body = 'Nueva consulta desde la web' . "\r\n";
$body .= 'Nombre: ' . $nombre . "\r\n";
$body .= 'Empresa: ' . $empresa . "\r\n";
$body .= 'Email: '. $email . "\r\n";
$body .= 'Telefono: '. $telefono . "\r\n";
$body .= 'Mensaje: '. $mensaje . "\r\n";

$headers = 'From: ' . $email . "\r\n" .
     'Reply-To: ' . $email . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $body, $headers);


?>