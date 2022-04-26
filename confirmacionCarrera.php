<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if (isset($_POST['Enviar'])) {

  $body= "Gracias";
  $subject="Llego";

    $mail = new PHPMailer();

    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only

    $mail->SMTPAuth = true; // autenticación habilitada

    $mail->SMTPSecure = 'ssl'; // Se requiere ssl para gmail

    $mail->Host = "smtp.gmail.com";

    $mail->Port = 465; // o 587 para tls

    $mail->IsHTML(true);

    $mail->Username = "robertommango@gmail.com";

    $mail->Password = "robgra4194";

    $mail->SetFrom("informes@gmail.com.com");

    $mail->Subject = $subject;

    $mail->Body = $body;

    $mail->CharSet = 'UTF-8';

    $mail->AddAddress("robertommango@gmail.com");

    
     if(!$mail->Send()) {

        echo "Mailer Error: " . $mail->ErrorInfo;

     } else {

        echo "El mensaje ha sido enviado";

     }
}

?>

 <a class="nav-link" href="Index_Sesion.php" role="button" aria-haspopup="true" aria-expanded="false">Inicio</a>