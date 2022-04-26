 <?php

require_once('../classes/phpmailer/mail.php');

if ( isset($_POST['Registrarse']) ){

   /* Vars of form completer.php */
   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $tipodni=$_POST['tipodni'];
   $numdni=$_POST['numdni'];
   $genero=$_POST['genero'];
   $telefono=$_POST['telefono'];
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $end = $_POST['fechanac'];
    $fecha_actual = strtotime(date("Y-m-d H:i:s"));
    $fecha_nacimiento = strtotime($end);

        if($fecha_actual -18 > $fecha_nacimiento){
            $fechanac=$_POST['fechanac'];
        }else{
         echo '<script type="text/javascript">
         window.location="../register/completer.php";
         alert("La fecha de nacimiento ingresada es incorrecta");
        </script>';
        }                   

   $calle=$_POST['calle'];
   $altura=$_POST['altura'];
   $carrera=$_POST['idcarrera'];
   $pass=$_POST['contra'];
   $mail=$_POST['mail'];
   $rol= 0;

   /*$hash = md5( rand(0,1000));
   $password = rand(1000,5000);*/

$hash = password_hash($pass, PASSWORD_BCRYPT);
$activasion = md5(uniqid(rand(),true));


   /* Connection width database*/
   require_once "../connection/connection.php";

   /* Insert data into database */
   $sql="INSERT INTO db_alumno2.usuarios(NOMBRE,APELLIDO,ID_TIPODNI,NUMERO_DNI,ID_GENERO,TELEFONO,FECHA_NAC,CALLE,ALTURA,ID_CARRERA,PASSWORD,EMAIL,active, ID_Rol) VALUES (:nombre,:apellido,:tipodni,:numdni,:genero,:telefono,:fechanac,:calle,:altura,:carrera,:contra,:mail,:active,:rol)";
   $result=$base->prepare($sql);
   $result->execute(array(":nombre"=>$nombre,":apellido"=>$apellido,":tipodni"=>$tipodni,":numdni"=>$numdni,":genero"=>$genero,":telefono"=>$telefono,":fechanac"=>$fechanac,":calle"=>$calle,":altura"=>$altura,":carrera"=>$carrera,":contra"=>$hash,":mail"=>$mail,":active"=>$activasion, ":rol"=>$rol));
   

/*Esto es lo que agrego*/
$id=$base->lastInsertId('ID_USUARIO');
$to = $_POST['mail'];
$subject="Confirmación de Registro";
$body ="<p>¡Gracias por registrarse en el sitio del ISFDT 109! </p><p>Para activar su cuenta, haga clic en este enlace: <a href='profe109.isft177.edu.ar/activate.php?x=$id&y=$activasion'>".DIR."activate.php?x=$id&y=$activasion</a></p><p>Saludos al administrador del sitio</p>";
}

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

    $mail->AddAddress($to);

    
     if(!$mail->Send()) {

        echo "Mailer Error: " . $mail->ErrorInfo;

     } else {

        echo "El mensaje ha sido enviado";

     }

/*Hasta aquí lo agregado*/
   header(htmlentities("location:../Login2.php?registered"));
  // $base->close();

?>
