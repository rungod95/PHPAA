<?php
// Ajusta esta ruta al archivo de la clase MailSender
require_once '../classes/MailSender.php'; // Ruta relativa a este archivo

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['to'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $body = $_POST['body'] ?? '';

    // Validar campos del formulario
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        die('El correo electrónico no es válido.');
    }

    if (empty($subject) || empty($body)) {
        die('Por favor, completa todos los campos.');
    }

    // Enviar el correo
    $mailSender = new MailSender();
    $result = $mailSender->send($to, $subject, $body);

    echo $result;
}
?>
