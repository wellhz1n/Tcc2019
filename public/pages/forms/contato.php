<?php
require '../../../bootstrap.php';
require "../../../app/function/DB.php";




$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["asunto"];
$sql = mysqli_query($cx,"INSERT INTO contato (Nome,Email,Assunto)
Values( '{$nome}','{$email}','{$assunto}')");

header("Location: http://localhost:8081/Tcc/public/?page=home");
die();

?>
