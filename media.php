<?php
$precio1 = $_POST['precio1'];
$precio2 = $_POST['precio2'];
$precio1 = $_POST['precio1'];


$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Sexo: " . $sexo . " \r\n";
$mensaje .= "Quiere información de la NBA? " . $NBA . " \r\n";
$mensaje .= "Quiere información de la MLB? " . $MLB . " \r\n";
$mensaje .= "Quiere información de la NHL? " . $NHL . " \r\n";
$mensaje .= "Comentarios: " . $comentarios . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ixorai2014@gmail.com';
$asunto = 'Envio formulario';

@mail($para, $asunto, utf8_decode($mensaje), $header);


header('Location: http://joseantoniosgi.esy.es/mailcorrecto');
?>