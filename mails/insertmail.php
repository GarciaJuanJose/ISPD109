<?php
use  PHPMailer\PHPMailer\PHPMailer ;
use  PHPMailer\PHPMailer\Exception ;
require '../src/Exception.php';
require '../src/PHPMailer.php' ;
require '../src/SMTP.php' ;

$email= $_POST['email'];
$numdni= $_POST['numdni'];
$pass= $_POST['password'];
$passhash= password_hash($pass,PASSWORD_DEFAULT,array("cost"=>15));
$str = strtoupper($numdni);
$validacion=0;
$rol=0;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "robertommango@gmail.com";                     // SMTP username
    $mail->Password   = "robgra4194";                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom("robertommango@gmail.com");
    $mail->addAddress($email);     // Add a recipient

    // Content
    $mail->isHTML(true);                 // Set email format to HTML
    $mail->Subject = 'Validación de cuenta';
    $mail->Body    = "Se ha registrado como alumno para el ISFD 109, para validar su cuenta ingrese " . "<a href='http://profe109.isft177.edu.ar/register/completer.php'>aquí</a>" .  "</b>";
    $mail->CharSet='UTF-8';

    require '../connection/connection.php';

    $querye="SELECT EMAIL FROM db_alumno2.usuarios WHERE EMAIL=:mail";
    $queryl="SELECT NUMERO_DNI FROM db_alumno2.usuarios WHERE NUMERO_DNI=:numdni";
    $resultadoq=$base->prepare($queryl);
    $resultadoe=$base->prepare($querye);
    $resultadoq->bindParam(":numdni",$str);
    $resultadoe->bindParam(":mail",$email);
    $resultadoq->execute();
    $resultadoe->execute();

    if ($resultadoq->rowCount()>0 || $resultadoe->rowCount()>0) {
      header(htmlentities("location:../Login2.php?noregister"));
    }else {
      $mail->send();
      header(htmlentities("location:../login.php?register"));
      $sql="INSERT INTO db_alumno2.usuarios(NUMERO_DNI,EMAIL,PASSWORD,active,ROL) VALUES (:numdni,:mail,:contra,:active,:rol)";
      $resultado=$base->prepare($sql);
      $resultado->execute(array(":numdni"=>$str,":mail"=>$email,":contra"=>$passhash,":active"=>$validacion,":rol"=>$rol));
      $base->close();
    }
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje. {$mail->ErrorInfo}";
}

?>
