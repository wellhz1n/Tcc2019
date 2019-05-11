<?php
require '../../../bootstrap.php';

$dados = validate([
  nome = 's',
  assunto = 's',
  message = 's',
  email = 's',
]);

dd($dados[nome]);


$sql = mysqli_query($cx,"INSERT INTO contato (Nome,Email,Assunto,data_envio)
Values( '{$nome}','{$email}','{$assunto}','{$date}')");

header("Location: http://localhost:8081/Tcc/public/?page=home");
die();

?>
