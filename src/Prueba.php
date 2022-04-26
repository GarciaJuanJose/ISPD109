<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'robertommango@gmail.com';                     // SMTP username
    $mail->Password   = 'robgra4194';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for 
    $mail->SetFrom("informes@gmail.com.com");
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress('robertommango@gmail.com');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'Ha recibido un nuevo mensaje de contacto';
    $mail->CharSet = 'UTF-8';
    $mail->AltBody = 'Contacto';
    $mail->send();
    	echo "El mensaje ha sido enviado";
} 
	catch (Exception $e) {
    	echo "Mailer Error: " . $mail->ErrorInfo;
}

?>