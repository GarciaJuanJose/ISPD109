<?php 

session_start();
session_destroy();
header('Location: index.php');

//require('includes/config.php');

//logout
//$user->logout(); 

//logged in return to index page
//header('Location: index.php');
//exit;

?>