<!-- <?php

/* require('../config/config.php');  */

?> -->
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container-fluid">

      <a class="navbar-brand" href="../index.php">

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
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/Contacto_Sesion.php" role="button" aria-haspopup="true" aria-expanded="false">Contacto</a>
          </li>
          <!--<li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/formularios.php" role="button" aria-haspopup="true" aria-expanded="false">Formularios</a>
          </li>-->
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_PROJECT ?>/Login2.php" role="button" aria-haspopup="true" aria-expanded="false">Iniciar sesión</a>
          </li>
        </ul>
      </div>


    </div>
  </nav>