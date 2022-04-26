<?php 

require_once('../config/config.php');

?>


<!DOCTYPE html>
<html>

<head>

  <head>
    <link rel="shortcut icon" href="#" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ENS 109</title>


    <!-- Css -->

    <link rel="stylesheet" href="../globals/css/bootstrap.min.css">
    <link rel="stylesheet" href="../globals/css/style.css">
    <link rel="stylesheet" type="text/css" href="../globals/fuentes/iconic/css/material-design-iconic-font.min.css">

    <!-- JS -->
    <script src="../globals/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="../globals/js/jquery-3.5.1.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../globals/fontawesome-free/css/all.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Título de página -->
    <title>Inicio</title>
    <style>
      
    </style>
  </head>

<body>

<?php 

require_once('banner.php');


require('navbar.php');

?>

<div class="container">
	<div class="row">
		<section>

			<form method="post" action="mailer.php">


				<legend class="fontform">Objetivos de la Carrera</legend>
				<p>Título: Profesor de Economía</p>
				<h5>El Profesorado en Economía tiene como objetivo formar docentes especialistas, capaces de generar en sus futuros educandos, actitudes responsables frente a los distintos problemas económicos que los afecten en particular y en general. Brindar a los futuros profesores en Economía una formación profesional ajustada a los nuevos requerimientos de la Ley Nacional.</h5>
				<legend class="fontform">Perfil del Título</legend>
				<h5>Los egresados desarrollarán su tarea de enseñanza en el nivel secundario de instituciones educativas oficiales, públicas o privadas. Esta propuesta educativa establece, como eje central, el conocimiento de la diferencia entre sociedades con economías dependientes, de aquellas que cuentan con capacidad de decisiones autónomas. El destino presente y futuro de toda nuestra juventud depende de esta disyuntiva: aprender a distinguir los mecanismos de sujeción y las políticas de Estado que pueden llevar paulatinamente hacia la independencia económica.</h5>

				<iframe src="../PDFs/Economia.pdf" width="100%" height="600px"></iframe>

		</section>
	</div>
</div>
<footer class="page-footer font-small bg-dark p-2 mt-3">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-1">

	<!-- Grid column -->
	<hr class="my-3"><br>
	<div class="col col-xs-12">
	  <p>
		<h5 class="text-white font-weight-bold"> Contacto</h5>
		<span class="text-white">
		  <i class="far fa-envelope text-white mr-3"></i> isfd109@hotmail.com</span><br><br>
		<span class="text-white">
		  <i class="fas fa-phone-alt text-white mr-3"></i> (0220) 482-5450 </span><br><br>

	  </p>

	  <p>
		<h5 class="text-white font-weight-bold"> Redes Sociales</h5>
		
		<a class="btn btn-outline-light p-0 border-0">
			<img src="<?php echo URL_PROJECT ?>/img/icons/iconface.png" width="65" height="65" class="d-inline-block align-top" alt="">
		</a>

		<a class="btn btn-outline-light p-0 border-0">
			<img src="<?php echo URL_PROJECT ?>/img/icons/iconinsta.png" width="65" height="65" class="d-inline-block align-top" alt="">
		</a>
		<span class="text-white">
		 

	  </p>


	</div>

	<!-- Grid column -->

	<!-- Grid column -->
	<hr class="my-3"><br>
	<div class="col-lg-7">
	<p>
	  <h5 class="text-white mb-2 font-weight-bold"> Ubicación</h5>
	  <span class="text-white"><i class="fas fa-map-marker-alt"></i>
		<!-- <i class="fas fa-map-marked-alt text-white mr-3"></i> -->11 de Noviembre 570, San Antonio de Padua, Provincia de Buenos Aires.</span><br><br>
	  <span class="text-white">
		<section>

		  <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.1459602912723!2d-58.695312985285916!3d-34.676265480440776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc15a7f60cdf3%3A0xd6cd57bc3a46bdb8!2sISFD%20N%C2%B0109!5e0!3m2!1ses-419!2sar!4v1593458155960!5m2!1ses-419!2sar" width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

		</section>

		</p>
	</div>


	<hr class="my-3"><br>

	<!-- Grid column -->

	<!-- Grid column -->

	<!-- Grid column -->

  </div>
  <!-- Footer links -->

  <hr>

  <!-- Grid row -->
  <div class="row d-flex align-items-center">

	<!-- Grid column -->

	<!-- Grid column -->

	<!-- Grid column -->


	<!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

</footer>
<!-- Footer -->


<script src="../globals/js/jquery-3.5.1.min.js"></script>


</body>

</html>