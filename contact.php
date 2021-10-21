<?php
$name    = $_POST['name'];
$email    = $_POST['email'];
$company = $_POST['company'];
$job     = $_POST['job'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Contacto desde nuestra Web Co2action " . $name . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'fsulbaran@co2action.us';
$asunto = 'Contacto desde nuestra Web Co2action';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>