<?php

//------------DEFINES PARA USO EN LOCALHOST------------//



/*define('DBHOST','localhost');

define('DBUSER','root');
 
define('DBPASS','');

define('DBNAME','db_alumno2'); */

//-----------------------------------------------------//



ob_start();

//session_start();

//--Define para subir a produccion--//

//define('URL_PROJECT' , 'https://profe109.isft177.edu.ar'); 

define('URL_PROJECT' , 'http://localhost/isfd_109');


//Configuración de la zona horaria

date_default_timezone_set('Europe/London');



//Credenciales de la base de datos

define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','db_alumno2');



//Indicar URL para el direccionamiento en el correo electrónico de confirmación

//define('DIR','https://profe109.isft177.edu.ar//');

define('SITEEMAIL','noreply@domain.com');


try {



	//Se crea la conexión PDO

	$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);

    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//Suggested to uncomment on production websites

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites

    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



} catch(PDOException $e) {

	//Se muestra el error

    echo '<p class="bg-danger">'.$e->getMessage().'</p>';

    exit;

}

//include the user class, pass in the database connection

include ('../classes/user.php');

include ('../classes/phpmailer/mail.php');

$user = new User($db);

?>
