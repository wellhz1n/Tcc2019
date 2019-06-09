<?php
require '../../../bootstrap.php';

$nome = $_POST['NOME'];
$NomeProduto = mysqli_query($cx,"SELECT nome FROM produto WHERE nome = $nome);
while ($a = mysqli_fetch_array($NomeProduto)) {
  return $a['nome'];
}
