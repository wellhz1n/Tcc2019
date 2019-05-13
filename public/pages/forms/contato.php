<?php
require '../../../bootstrap.php';
$dados = validate([
  'nome' => 's',
  'assunto' => 's',
  'message' => 's',
  'email' => 'e'
]);

$nome = $dados->nome;
$assunto = $dados->assunto;
$email = $dados->email;
$message = $dados->message;

// $nome = $_POST['nome'];
// $email = $_POST['email'];
// $assunto = $_POST['assunto'];


$sql = mysqli_query($cx,"INSERT INTO contato (Nome,Email,Assunto,data_envio)
Values( '{$nome}','{$email}','{$assunto}','{$date}')");

// header("Location: http://localhost:8081/Tcc/public/?page=home");
die();

?>
