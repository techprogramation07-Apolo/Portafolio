<?php
// send-contact.php
// Envío de formulario por SMTP con PHPMailer (recomendado)

ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json; charset=utf-8');

function respond($success, $message = '') {
    echo json_encode(['success' => $success, 'error' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Método no permitido.');
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!$name || !$email || !$message) {
    respond(false, 'Todos los campos son obligatorios.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Email inválido.');
}

// --------------------------------------------------
// CONFIGURACIÓN SMTP (GMAIL)
// --------------------------------------------------
$smtpHost = 'smtp.gmail.com';
$smtpPort = 587;
$smtpUser = 'techprogramation.07@gmail.com';
$smtpPass = 'ygii dfyf sdbo kapg'; // contraseña de aplicación
$fromEmail = 'techprogramation.07@gmail.com';
$fromName = 'TechProgramation';

// CORREO QUE RECIBE LOS MENSAJES
$toEmail = 'techprogramation.07@gmail.com';
$toName = 'TechProgramation';

$subject = "Nuevo mensaje desde el formulario de contacto";
$body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message\n";

// --------------------------------------------------
// PHPMailer (usando archivos locales con namespace)
// --------------------------------------------------
require_once __DIR__ . '/vendor/PHPMailer/PHPMailer/Exception.php';
require_once __DIR__ . '/vendor/PHPMailer/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/vendor/PHPMailer/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $smtpPort;

    // Evitar errores SSL típicos en XAMPP
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];

    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($toEmail, $toName);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $body;

    $mail->send();
    respond(true);

} catch (Exception $e) {
    error_log('PHPMailer Error: ' . $mail->ErrorInfo);
    respond(false, 'Error al enviar: ' . $mail->ErrorInfo);
}