<?php
require '../../../bootstrap.php';

$id = $_POST['ID'];
$DelProduto = $produtoDAO->selectID($id);
$usuario = mysqli_fetch_object($DelProduto);
 
// Removendo usuário do banco de dados
$DelProduto = $produtoDAO->delete($id);
 
// Removendo imagem da pasta fotos/
unlink("../../assets/img/produto/".$usuario->img."");
header("Location: http://localhost:8081/Tcc/public/?page=adm_produto");
die();