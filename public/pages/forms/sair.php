<?php 
session_start();
unset($_SESSION["login"]);
unset($_SESSION["usuario"]);
unset($_SESSION["id"]);
unset($_SESSION['tuser']);

header("Location: http://localhost:8081/Tcc2019/public/?page=home");
die();

?>