<?php

session_start();
if( isset($_SESSION['login'], $_SESSION['id']) ){
    require '../../../bootstrap.php';
    $idproduto = $_POST['ID'];
    echo $idproduto;

    $iduser = $_SESSION['id'];
    echo $iduser;

  $insert = mysqli_query($cx,"insert into carrinho(idproduto,idusuario) values('{$idproduto}','{$iduser}')");

   if($insert){
    header("Location: http://localhost:8081/Tcc/public/?page=carrinho");
    die();
   }


}
else {
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();
}
?>