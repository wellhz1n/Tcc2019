<?php

require '../../../bootstrap.php';
require "../../../app/function/DB.php";
 $id = $_POST['id'];

echo $id;
$DelProduto = $usuarioDAO->inserirImagem(2,null,$id);
    $ft = mysqli_fetch_object($DelProduto);


unlink("../../assets/img/usuario/".$ft->img."");

$deleteUser = mysqli_query($cx,"DELETE FROM usuario  WHERE usuario.id_user = $id ");

//
// header("Location: http://localhost:8081/Tcc/public/?page=adm_usuario");
// die();



?>
<!-- <h1><?php# dd($id); ?></h1> -->
