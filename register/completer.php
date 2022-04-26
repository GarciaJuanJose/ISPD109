 <?php
    require "../config/conmysqli.php";

    require_once('../includes/config2.php');
    $querytypedni = $base->query("SELECT * FROM tipo_dni");
    $querygender = $base->query("SELECT * FROM genero");
    $querycarrera = $base->query("SELECT * FROM carreras");
    //$queryRol = $base->query("SELECT * FROM rol"); 
    //var_dump ($querycarrera);


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
             body {
                 background: white;
                 background-size: cover;
             }

             *[role="form"] {
                 max-width: 530px;
                 padding: 15px;
                 margin: 0 auto;
                 border-radius: 0.3em;
                 background-color: #f2f2f2;
             }

             *[role="form"] h2 {
                 font-family: 'Open Sans', sans-serif;
                 font-size: 40px;
                 font-weight: 600;
                 color: #000000;
                 margin-top: 5%;
                 text-align: center;
                 text-transform: uppercase;
                 letter-spacing: 4px;
             }
         </style>
     </head>

 <body>
     <?php

        require_once('../vistas/banner.php');


        require('../vistas/navbar.php');

        ?>
<section>

     <div class="container mt-5">
         <!--<form action="../ValidarRegistro.php" method="post"> -->
            <form action="insert.php" method="post">
          <a class="form-horizontal" role="form"></a>
             <h2>Formulario de registro</h2>
             <div class="form-group">
                 <label for="nombre" class="col-sm-3 control-label"> * Nombre: &#10549;</label>
                 <div class="col-sm-9">
                     <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" class="form-control" autofocus>
                 </div>
             </div>
             <div class="form-group">
                 <label for="apellido" class="col-sm-3 control-label"> * Apeliido: &#10549;</label>
                 <div class="col-sm-9">
                     <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" class="form-control" autofocus>
                 </div>
             </div>

             <div class="form-group">
                 <label for="tipodni" class="col-sm-3 control-label"> * Tipo DNI: &#10549;</label><br>
                 <div class="col-sm-9">
                     <select name="tipodni" class="form-control">
                         <?php
                            while ($datos = $base = mysqli_fetch_array($querytypedni)) {
                            ?>
                             <option value="<?php echo $datos['ID_TIPO_DNI'] ?>"> <?php echo $datos['TIPO_DNI'] ?> </option>
                         <?php
                            }
                            ?>
                     </select>
                 </div>
             </div>

             <div class="form-group">
             <label for="numdni" class="col-sm-3 control-label">* DNI: &#10549;</label>
             <div class="col-sm-9">
                <input  type="text" maxlength="8" pattern="((\d{8})([-]?)" class="form-control" id="dni" name="numdni" placeholder="Ingrese su DNI" required>
                 </div>
             </div>
             
             <div class="form-group">
                 <label for="genero" class="col-sm-3 control-label"> * Genero: &#10549;</label><br>
                 <div class="col-sm-9">
                     <select name="genero" class="form-control">
                         <?php
                            while ($datos = $base = mysqli_fetch_array($querygender)) { ?>
                             <option name="genero" value="<?php echo $datos['ID_GENERO'] ?>"> <?php echo $datos['GENERO'] ?> </option>
                         <?php
                            } ?>
                     </select>
                 </div>
             </div>
             <div class="form-group">
                 <label for="telefono" class="col-sm-3 control-label">* Telefono: &#10549;</label><br>
                 <div class="col-sm-9">
                     <input type="text" maxlength="10" name="telefono" class="form-control" placeholder="Ingrese su número de teléfono" maxlength="11">
                 </div>
             </div>
            
             <div class="form-group">
                 <label for="fechanac" class="col-sm-5 control-label"> * Fecha de nacimiento: &#10549;</label>
                 <div class="col-sm-9">
                     <input type="date" id="fechanac" name="fechanac" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 <label for="calle" class="col-sm-3 control-label"> * Calle: &#10549;</label>
                 <div class="col-sm-9">
                     <input type="text" id="calle" name="calle" placeholder="Ingrese su calle" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 <label for="altura" class="col-sm-3 control-label"> * Altura: &#10549;</label>
                 <div class="col-sm-9">
                     <input type="text" maxlength="4" name="altura" placeholder="Ingrese la altura de la calle" class="form-control">
                 </div>
             </div>
             <div class="form-group">
                 <label for="idcarrera" class="col-sm-5 control-label"> * Carrera a cursar: &#10549;</label><br>
                 <div class="col-sm-9">
                     <select name="idcarrera" class="form-control">
                         <?php
                            while ($datos = $base = mysqli_fetch_array($querycarrera)) {
                            ?>
                             <option value="<?php echo $datos['ID_CARRERA'] ?>"> <?php echo $datos['NOMBRE'] ?> </option>
                         <?php
                            }
                            ?>
                     </select>
                 </div>
             </div>
             <div class="form-group">
                 <label for="mail" class="col-sm-3 control-label"> * Email: &#10549;</label>
                 <div class="col-sm-9">
                     <input type="email" placeholder="Ingrese su email" class="form-control" name="mail">
                 </div>
             </div>

             <div class="form-group">
                 <label for="contra" class="col-sm-4 control-label"> * Contraseña: &#10549;</label>
                 <div class="col-sm-9">
                     <input type="password" id="password" name="contra" placeholder="Ingrese una contraseña" class="form-control">
                 </div>
             </div>

             <!--<div class="form-group">
                 <label for="rol" class="col-sm-5 control-label">Rol: &#10549;</label><br>
                 <div class="col-sm-9">
                     <select name="rol" class="form-control">
                         <?php
                            //while ($datos = $base = mysqli_fetch_array($queryRol)) {
                            ?>
                             <option value="<?php //echo $datos['ID_Rol'] ?>"> <?php //echo $datos['rol'] ?> </option>
                         <?php
                            //}
                            ?>
                     </select>
                 </div>
             </div>-->
        
             <div class="form-group">
                 <div class="col-sm-9 col-sm-offset-3">
                     <span class="help-block"> * Campos requeridos</span>
                 </div>
             </div>
             <button type="submit" name="Registrarse" value="Completar registro" class="btn btn-primary btn-block">Registrarse</button>
         </form> <!-- /form -->
   <!--</form>-->
     </div> <!-- ./container -->

</section>   

     <footer class="page-footer font-small bg-dark p-2 mt-3">

         <!-- Footer Links -->
         <div class="container text-center text-md-left">

             <!-- Footer links -->
             <div class="row text-center text-md-left mt-3 pb-1">

                 <!-- Grid column -->

                 <div class="col-md-4 col-xs-12">
                     <p>
                         <h5 class="text-white font-weight-bold"> Contacto</h5>
                         <span class="text-white">
                             <i class="far fa-envelope text-white mr-3"></i> isfd109@hotmail.com</span><br><br>
                         <span class="text-white">
                             <i class="fas fa-phone-alt text-white mr-3"></i> (0220) 4825-450 </span><br><br>

                     </p>


                 </div>

                 <!-- Grid column -->

                 <!-- Grid column -->
                 <hr class="my-3"><br>
                 <div class="col-lg-7">
                     <h5 class="text-white mb-2 font-weight-bold"><i class="fas fa-map-marker-alt"></i> Ubicación</h5>
                     <span class="text-white">
                         <!-- <i class="fas fa-map-marked-alt text-white mr-3"></i> -->11 de Noviembre 570, San Antonio de Padua, Provincia de Buenos Aires.</span><br><br>
                     <span class="text-white">
                         <section>

                             <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.1459602912723!2d-58.695312985285916!3d-34.676265480440776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc15a7f60cdf3%3A0xd6cd57bc3a46bdb8!2sISFD%20N%C2%B0109!5e0!3m2!1ses-419!2sar!4v1593458155960!5m2!1ses-419!2sar" width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                         </section>
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