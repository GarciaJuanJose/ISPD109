<?php
    include '../connection/connection.php';
    include '../mailpass';
    $newpass=$_POST['newpass'];
    $crypt=password_hash($newpass,DEFAULT_PASSWORD,array('cost'=>15));
    $sql="UPDATE users_mail SET PASSWORD= $crypt WHERE EMAIL= $email";
    $email='';
    echo "Clave guardada";
 ?>
