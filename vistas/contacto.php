<?php

require_once('header.php');

require_once('banner.php');

require_once('navbar.php');

?>

<section>
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


</section>

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


<script src="../globals/js/jquery-3.5.1.min.js"></script>


</body>

</html>