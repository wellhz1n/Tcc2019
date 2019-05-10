<?php
require '../../../bootstrap.php';

$id = $_POST['ID'];
$DelProduto = mysqli_query($cx,"SELECT img FROM produto WHERE id = '".$id."'");
$usuario = mysqli_fetch_object($DelProduto);
 
// Removendo usuário do banco de dados
$DelProduto = mysqli_query($cx,"DELETE FROM produto WHERE id = '".$id."'");
 
// Removendo imagem da pasta fotos/
unlink("../../assets/img/produto/".$usuario->img."");
header("Location: http://localhost:8081/Tcc/public/?page=adm_produto");
die();