<?php

session_start();
if( isset($_SESSION['login'], $_SESSION['id']) ){
    require '../../../bootstrap.php';
    $idproduto = $_POST['ID'];
    echo $idproduto;

    $iduser = $_SESSION['id'];
    echo $iduser;

 


}
else {
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();
}
?>
