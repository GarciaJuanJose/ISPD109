<?php
require('includes/config.php');

//se toman los valores de la URL
$ID_USUARIO = trim($_GET['x']);
$active = trim($_GET['y']);

//Si el id es numérico y el token actual no está vacío continúa
if(is_numeric($ID_USUARIO) && !empty($active)){

	//Actualizar el registro de alumnos establece el campo activo en Sí, donde el ID de alumno y el valor activo coinciden con los proporcionados en la tabla
	$stmt = $db->prepare("UPDATE usuarios SET active = 'Yes' WHERE ID_USUARIO  = :ID_USUARIO AND active = :active");
	$stmt->execute(array(
		':ID_USUARIO' => $ID_USUARIO,
		':active' => $active
	));

	//Si la fila se actualizó redirige al usuario
	if($stmt->rowCount() == 1){
     //Redirección a la página de login
	
	header('location:regexit.html');
	//header('Location:login.php?action=active');
	exit;

	} else {
		echo "Se produjo un error y no se pudo activar su cuenta..."; 
	}
	
}
?>
