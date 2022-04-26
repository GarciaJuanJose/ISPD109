<?php

require_once('header.php');

require_once('banner.php');

require_once('navbar.php');

?>

<section>
		<div class="container text-center">
     	<form method="post" action ="mailer.php">
              <fieldset>
                  <legend class="fontform">Formularios</legend><br>

                 <h3 style="color:red"> <b>  Los formularios pueden descargarse e imprimirse en blanco o completarlos anteriormente On-line </h3>

                 <br>

                 


                 <a href="../Formularios/CertificadoDeAlumnoRegular.pdf"target="_blank">Certificado de alumno regular</a><br><br>
                 <a href="../Formularios/CertificadoDeTituloEnTramite.pdf"target="_blank">Certificado de Titulo en tramite</a><br><br>
                 <a href="../Formularios/ConstanciaDeAsistenciaAExamenes.pdf"target="_blank">Constancia de Asistencia a examenes</a><br><br>
                 
</section>

<?php

require_once('footer.php');

?>
