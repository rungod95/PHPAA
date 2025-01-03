<?php

require_once './classes/MailSender.php';

$config = require_once './config/config.php';

$mailSender = new MailSender(
    $config['host'],
    $config['username'],
    $config['password'],
    $config['encryption'],
    $config['port']
);

// Dirección de correo de destino, asunto y cuerpo del correo
$to = 'javier.plan@hotmail.com';
$subject = 'Prueba de correo';
$body = '<h1>¡Hola!</h1><p>Este es un correo de prueba enviado con PHPMailer.</p>';

echo $mailSender->send($config['from_email'], $config['from_name'], $to, $subject, $body);

?>
