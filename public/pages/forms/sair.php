<?php 
session_start();
unset($_SESSION["login"]);
unset($_SESSION["usuario"]);

header("Location: http://localhost:8081/Tcc/public/?page=home");
die();

?>