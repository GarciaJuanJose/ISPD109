<?php

      // Formulario para ingresar si el usuario y contraseña son correctos y el mismo se encuentre validado.

      /* Variables del formulario login.php */
      $numdni=htmlentities(addslashes($_POST["numdni"]));
      $contraseña=htmlentities(addslashes($_POST["password"]));
      $contador=0;
      $bool=0;
      $str = strtoupper($numdni);
      /* Llamada a base de datos */
      include '../connection/connection.php';

      /* Consulta para tomar el mail almacenado en la base de datos */
      $sql="SELECT * FROM db_alumno2.usuarios WHERE NUMERO_DNI= :numdni";
      $resultado= $base->prepare($sql);
      $resultado->execute(array(":numdni"=>$str));
      while ($registro=$resultado->fetch(PDO::FETCH_ASSOC))
      {
        if(password_verify($contraseña,$registro['PASSWORD']) && $registro['activate'] > 0)
        {
          $contador++;
          $bool++;
        }
      }



      /* Si es verdadero, entonces se iniciará sesión */
      if($contador>0 && $bool>0)
      {
        session_start();
        $_SESSION["usuario"]=$_POST["numdni"];
        header("location:../index.php");
      }elseif($bool==0){
          header("location:../register/completer.php");
      }else{
        header("location:../login.php?noinit");
      }
      // Terminado esto, entonces redirige a inicio, sino al formulario login.php

      $base->close();

 ?>
