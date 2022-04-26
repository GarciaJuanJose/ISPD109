<?php

require('includes/config.php');

/* require('vistas/header.php'); */
if ( isset($_POST['Enviar']) ){
  include ("config/connect.php");
  
$usuario=mysqli_real_escape_string($conexion, $_POST['numdni']);
$contra=mysqli_real_escape_string($conexion, $_POST['password']);
$ok=0;
      
$UsuPassVacio=0; $UsuVacio=0; $PassVacio=0; $UsPsInc=0; $CuentInhab=0; $UsNoReg=0; $CuentNoVal=0;
  
  if(empty($usuario)&&empty($contra)){ $UsuPassVacio=1; $ok=1;
    }elseif(empty($usuario)){ $UsuVacio=1; $ok=1;
    }elseif(empty($contra)){ $PassVacio=1; $ok=1;
  }

if ($ok==0) {

$comprobacion_del_nombre='SELECT * FROM usuarios WHERE NUMERO_DNI = "'.$usuario.'"';

$comprobacion=$conexion->query($comprobacion_del_nombre);

    if ($comprobacion->num_rows>0){
      $consulta_a_la_base=mysqli_query($conexion, 'SELECT * FROM usuarios WHERE NUMERO_DNI ="'.$usuario.'"');
      $recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
      $comprobar_contraseña=password_verify($contra,$recoger_dato['PASSWORD']);

        if ($comprobar_contraseña) {
          
          if  ($recoger_dato['active'] !='Yes') {
            $CuentNoVal=1;
          }else if ($recoger_dato['active'] !='Yes') {
              $CuentInhab=1;
          }else if  ($recoger_dato['active']='Yes')  {
              
              session_start();
              
              $_SESSION['numdni'] = $recoger_dato;
            header('location: Index_Sesion.php');
          }
        }
        else{ $UsPsInc=1; }
    }else{ $UsNoReg=1; }
}//Fin ok==0
}

  
/* require('vistas/header.php'); */
?>
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
</head>

<body>
	
<?php

require_once('vistas/banner.php');

?>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container-fluid">

      <a class="navbar-brand" href="<?php echo URL_PROJECT ?>/index.php">

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
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/index.php" role="button" aria-haspopup="true" aria-expanded="false">Inicio</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/carreras.php" role="button" aria-haspopup="true" aria-expanded="false">Carreras</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/contacto.php" role="button" aria-haspopup="true" aria-expanded="false">Contacto</a>
          </li>
          <!--<li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/formularios.php" role="button" aria-haspopup="true" aria-expanded="false">Formularios</a>
          </li>-->
          <!--<li class="nav-item active">
            <a class="nav-link" href="<?php //echo URL_PROJECT ?>/Login2.php" role="button" aria-haspopup="true" aria-expanded="false">Iniciar sesión</a>
          </li>-->
        </ul>
      </div>


    </div>
  </nav>

<!DOCTYPE html>

<html lang="es">

<head> <meta charset="UTF-8"> </head>

<body>

      <div class="container">

  <div class="row">

    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

      <form role="form" method="post" action="Login2.php" autocomplete="off"><br>

        <?php
  if ( isset($_POST['Enviar']) ){
    if ($UsuPassVacio==1) { echo '<br><br><label style="color: red; font-size: 28px;"><b>Ingrese sus datos !</b></label>'; }
    elseif ($UsuVacio==1) { echo '<br><br><label style="color: red; font-size: 28px;"><b>Ingrese su correo !</b></label>'; }
    elseif ($PassVacio==1) { echo '<br><br><label style="color: red; font-size: 28px;"><b>Ingrese su contraseña !</b></label>'; }
    elseif ($UsPsInc==1) { 
      echo '<br><br><label style="color: red; font-size: 28px;"><b>Usuario o contraseña incorrecto !</b></label>';
    }elseif ($CuentInhab==1) {
      echo '<br><br><label style="color: red; font-size: 28px;"><b>Su cuenta se encuentra inhabilitada.</b></label><br><br><a href="HabilitarCuenta.php"><button style="color: black; font-size: 28px;">¿Desea volver a habilitarla?</button></a>';
    }elseif ($UsNoReg==1) { echo '<br><br><label style="color: red; font-size: 28px;"><b>El usuario no se encuentra registrado o esta mal escrito.<br>Verifique que el usuario y/o contraseña estén bien escritos.</b></label>';
    }elseif ($CuentNoVal==1) {
      echo '<br><br><label style="color: red; font-size: 28px;"><b>Su cuenta aún no ha sido validada.<br>Por favor ingrese a su correo electrónico y valide su cuenta para comenzar a utilizarla.</b></label>';
    }
  }
?>

        <h3>Por favor Iniciar Sesión</h3>

        <p><a href='index.php'>Retornar al inicio</a></p>
        <hr>

        <div class="form-group">
                
                <input type="text" placeholder="&#128590; Ingrese su DNI" maxlength="8" name="numdni" id="numdni"class="form-control input-lg" autocomplete="off" tabindex="3" required="Complete este campo">
                
        </div>

        <div class="form-group">

          <input type="password" placeholder="&#128272; Contraseña" name="password" id="password" class="form-control input-lg"autocomplete="off"  tabindex="3" required="Complete este campo">

          </div>

        <div class="row">

          <div class="col-xs-9 col-sm-9 col-md-9">

            <a href='register/completer.php'>Registrarse</a><br>
            <a href='Recuperar.php'>Recuperar contraseña?</a>  
          </div>

        </div>

        <hr>

        <div class="row">

          <div class="col-xs-9 col-sm-9 col-md-9">

          <div class="col-xs-6 col-md-6"><input type="submit" name="Enviar" value="Enviar" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>

        </div>
      </div>
           </form>
<!--<form method="post" action="Validaciones.php">-->    

</body>
</html> 