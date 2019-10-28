<?php 
require '../../../bootstrap.php';
session_start();
unset($_SESSION["login"]);
unset($_SESSION["usuario"]);
unset($_SESSION["id"]);
unset($_SESSION['tuser']);
header("Location:$location/Tcc2019/public/?page=home");
die();

?>