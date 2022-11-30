<?php 
session_start();
//destruir una variable de sesion
//unset();
//destruir todas las variables de sesion
session_destroy();

header("Location: index.php");
?>