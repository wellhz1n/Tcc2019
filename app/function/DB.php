<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("127.0.0.1", "root", "");

//selecionando o banco de dados 
$db = mysqli_select_db($cx, "Tcc");

//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM contato") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);

//pecorrendo os registros da consulta. 

?>