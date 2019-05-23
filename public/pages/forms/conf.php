<?php
require '../../../bootstrap.php';
$ativo = $_POST['cor'];
$Nome = $_POST['nome'];
$buscaconf = mysqli_query($cx,"SELECT * FROM configuracoes WHERE chave = '{$Nome}'");

if(mysqli_num_rows($buscaconf) !=0 ){
  $update = mysqli_query($cx,"UPDATE configuracoes SET ativo = '{$ativo}' WHERE chave = '{$Nome}'");
}
else{

  $inserir = mysqli_query($cx,"INSERT INTO configuracoes (chave,ativo,idusuario) VALUES('{$Nome}','{$ativo}','{$_SESSION['id']}')");
}

if($inserir|| $update){

  header("Location: http://localhost:8081/Tcc/public/?page=configuracoes");
  die();

}

else{
  echo "deu ruim o mundo vai acabar vc acabou de hackear o FBI corre vai!";
}














?>
