<?php

require_once __DIR__ . '/../libs/PHPMailer-master/PHPMailer-master/src/Exception.php';
require_once __DIR__ . '/../libs/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require_once __DIR__ . '/../libs/PHPMailer-master/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailSender
{
    private $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        // Configuración del servidor SMTP
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.gmail.com';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'jabierplanos@gmail.com';
        $this->mail->Password = 'nvtv yalu cfoe skxm';
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Port = 587;

        // Opciones SSL (si es necesario ignorar certificados)
        $this->mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ],
        ];
    }

    public function send($to, $subject, $body)
    {
        try {
            $this->mail->setFrom('jabierplanos@gmail.com', 'Javier');
            $this->mail->addAddress($to);
            $this->mail->Subject = $subject;
            $this->mail->Body = $body;
            $this->mail->isHTML(true);

            $this->mail->send();
            return "Correo enviado exitosamente a $to";
        } catch (Exception $e) {
            return "Error al enviar el correo: " . $this->mail->ErrorInfo;
        }
    }
}
?>
