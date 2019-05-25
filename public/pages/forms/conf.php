<?php
require '../../../bootstrap.php';
$ativo = $_POST['cor'];
$Nome = $_POST['nome'];
$corsinha = $_POST['corsinha'];

switch ($Nome) {
  case 'MUDARCORSITE':

        $buscaconf = mysqli_query($cx,"SELECT * FROM configuracoes WHERE chave = '{$Nome}' AND idusuario = '{$_SESSION['id']}'  ");

        if(mysqli_num_rows($buscaconf) !=0 ){
          $update = mysqli_query($cx,"UPDATE configuracoes SET ativo = '{$ativo}', cor = '{$corsinha}'  WHERE chave = '{$Nome}' AND  idusuario = '{$_SESSION['id']}'");
        }
        else{
          echo ativo.' '.$Nome."".$_SESSION['id'];

          $inserir = mysqli_query($cx,"INSERT INTO configuracoes (chave,ativo,idusuario,cor) VALUES('{$Nome}','{$ativo}','{$_SESSION['id']}', '{$corsinha}')");
        }

        if($inserir|| $update){

          header("Location: http://localhost:8081/Tcc/public/?page=configuracoes");
          die();

        }

        else{
          echo "deu ruim o mundo vai acabar vc acabou de hackear o FBI corre vai!";
        }




    break;
    case 'DESABILITACONTATO':
          $buscaconf = mysqli_query($cx,"SELECT * FROM configuracoes WHERE chave = '{$Nome}' AND idusuario = '{$_SESSION['id']}'  ");

          if(mysqli_num_rows($buscaconf) !=0 ){
            $update = mysqli_query($cx,"UPDATE configuracoes SET ativo = '{$ativo}' WHERE chave = '{$Nome}' AND idusuario = '{$_SESSION['id']}'");
          }
          else{
            echo ativo.' '.$Nome."".$_SESSION['id'];

            $inserir = mysqli_query($cx,"INSERT INTO configuracoes (chave,ativo,idusuario) VALUES('{$Nome}','{$ativo}','{$_SESSION['id']}')");
          }

          if($inserir|| $update){

            header("Location: http://localhost:8081/Tcc/public/?page=configuracoes");
            die();

          }

          else{
            echo "deu ruim o mundo vai acabar vc acabou de hackear o FBI corre vai!";
          }
    break;


  default:
    // code...
    break;
}



















?>
