<?php

session_start();

require('includes/config.php');
  
if ($_SESSION == null || $_SESSION == '') {
  echo '<script type="text/javascript">
        window.location="Login2.php";
        alert("No tienes autorización para acceder a esta página, ya que no has iniciado sesión...");
       </script>';
    die();
  }

  elseif (isset($_SESSION['numdni'])) {

include 'config/connect.php';

$SUser='SELECT * FROM usuarios WHERE ID_USUARIO = "'.$_SESSION['numdni']['ID_USUARIO'].'"';
$QryUser=mysqli_query($conexion,$SUser) or die ('Usuario sin datos<br>'.mysqli_error($conexion));
$DatosUser=mysqli_fetch_assoc($QryUser);

}
    $Rol = $_SESSION['numdni']['ID_Rol'];

     if ($Rol==0) {
      $Roles = 'Alumno';
     }elseif ($Rol==1) {
      $Roles = 'Root';
     }elseif ($Rol==2) {
      $Roles = 'Preceptor';
     }
?>

<?php require_once('includes/config.php');?>

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

    <link rel="stylesheet" href="globals/css/bootstrap.min.css">
    <link rel="stylesheet" href="globals/css/style.css">
    <link rel="stylesheet" type="text/css" href="globals/fuentes/iconic/css/material-design-iconic-font.min.css">

    <!-- JS -->
    <script src="globals/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="globals/js/jquery-3.5.1.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="globals/fontawesome-free/css/all.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Título de página -->
    <title>Inicio</title>
    <style>
      
    </style>
  </head>

<body>

  <header1> <h4 align="right">Bienvenido/a <?php echo $_SESSION['numdni']['NOMBRE']; ?> - Tipo de usuario: <?php echo $Roles; ?>
  </h4></header1>
<?php 

require_once('vistas/banner.php');

 

?>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container-fluid">

      <a class="navbar-brand" href="<?php echo URL_PROJECT ?>/Index_Sesion.php">

       <!--  <img class="" src="img/Logo.png" alt="Logotipo ISFD 109" width="40" height="40"> -->
        <small>E.N.S N° 109</small>
      </a>
      <a class="navbar-brand text-white text-left"> </a>


      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu items -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto text-center">

        <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/Index_Sesion.php" role="button" aria-haspopup="true" aria-expanded="false">Inicio</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/Carreras_Sesion.php" role="button" aria-haspopup="true" aria-expanded="false">Carreras</a>
          </li>
          <!--<li class="nav-item active">
            <a class="nav-link" href="<?php //echo URL_PROJECT ?>/Contacto_Sesion.php" role="button" aria-haspopup="true" aria-expanded="false">Contacto</a>
          </li>-->
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/formularios.php" role="button" aria-haspopup="true" aria-expanded="false">Formularios</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/logout.php" role="button" aria-haspopup="true" aria-expanded="false">Cerrar Sesión</a>
          </li>
        </ul>
      </div>


    </div>
  </nav>

  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action ="mails/mailcontact_Sesion.php">
                    <fieldset>
                        <legend class="text-center header">Formulario de contacto</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="Nombre" name="Nombre" type="text" placeholder="Ingrese su nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="Apellido" name="Apellido" type="text" placeholder="Ingrese su apellido" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Ingrese su e-mail" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="Telefono" name="Telefono" type="text" placeholder="Ingrese su telefono" maxlength="10" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-edit"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="Mensaje" name="Mensaje" required pattern="[A-Za-z0-9]{5,40}" placeholder="Escriba aqui su mensaje" rows="7" minlength="5" maxlength="255" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 255"/></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
 


<!--<section>
		<div class="contenedor seccion contenido-centrado">
     	<form method="post" action ="mails/mailcontact.php">
              <fieldset>
                  <legend class="fontform">Formulario de contacto</legend>

											<div>
                          <input id="fname" name="name" type="text" placeholder="Nombre" class="input" required>
                      </div>

                      <div>
                          <input id="lname" name="lastname" type="text" placeholder="Apellido" class="input" required>
                      </div>

                			<div>
                          <input id="email" name="email" type="email" placeholder="Email" class="input" required>
                      </div>


                      <div class="col-md-8">
                          <input id="phone" name="phone" type="tel" placeholder="Telefono" class="input" max="10" required>
                      </div>

                      <div class="col-md-8">
                          <textarea class="form-control" id="message" name="message" placeholder="Escriba su mensaje" rows="7" maxlength="1000" required></textarea>
                      </div>
                          <input type="submit" value ="Enviar">
              </fieldset>
          </form>
      </div>


</section>-->

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
        
        <a href="https://www.facebook.com/isfd.juanaazurduy.9" target="_blank" class="btn btn-outline-light p-0 border-0">
            <img   src="<?php echo URL_PROJECT ?>/img/icons/iconface.png" width="65" height="65" class="d-inline-block align-top" alt="">
        </a>
       
        <a href="https://instagram.com/isfd109_juana_azurduy?igshid=1iknkeb7wfwrh" target="_blank" class="btn btn-outline-light p-0 border-0">
            <img   src="<?php echo URL_PROJECT ?>/img/icons/iconinsta.png" width="65" height="65" class="d-inline-block align-top" alt="">
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


<script src="globals/js/jquery-3.5.1.min.js"></script>


</body>

</html>