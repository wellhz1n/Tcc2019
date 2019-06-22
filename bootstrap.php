<?php
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');

session_start();


require "app/function/DB.php";
require "app/function/custom.php";
require 'app/function/dd.php';
require 'app/function/validate.php';
require "app/function/pages.php";
require "app/function/DAO/ProdutoDAO.php";
require "app/function/DAO/UsuarioDAO.php";


$produtoDAO = new Produto();
$usuarioDAO = new Usuario();





?>
