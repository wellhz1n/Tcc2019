<?php
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');
$location = "http://localhost:8081";
session_start();


require "app/function/DB.php";
require "app/function/custom.php";
require 'app/function/dd.php';
require 'app/function/validate.php';
require "app/function/pages.php";
require "app/function/DAO/ProdutoDAO.php";
require "app/function/DAO/UsuarioDAO.php";
require "app/function/DAO/CarteiraDAO.php";


$produtoDAO = new Produto();
$usuarioDAO = new Usuario();
$carteiraDAO = new CarteiraDAO();




?>
