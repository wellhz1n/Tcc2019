<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("127.0.0.1", "root", "");

//selecionando o banco de dados 
$db = mysqli_select_db($cx, "Tcc") or die(criaDB());

//criando a query de consulta à tabela criada 
$sql_contato = mysqli_query($cx, "SELECT * FROM contato") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);


//pecorrendo os registros da consulta. 
// function criaDB(){
//   $cx = mysqli_connect("127.0.0.1", "root", "");

//     mysqli_query($cx,"CREATE DATABASE IF NOT EXISTS Tcc") or die(mysqli_error($cx));
//     $db = mysqli_select_db($cx, "Tcc");
//  mysqli_query($cx,"CREATE TABLE IF NOT EXISTS contato(
//   id int NOT NULL AUTO_INCREMENT,
//     Nome varchar(255) NOT NULL,
//     Email varchar(255) NOT NULL,
//     Assunto varchar(255) NOT NULL,
//       PRIMARY KEY (id)
//   )")or die (mysqli_error($cx));

  
// mysqli_query($cx,"INSERT INTO contato (Nome,Email,Assunto) VALUES
// ( 'wellington', 'wellington@gmail.com', 'teste'),
// ('Mateus', 'nidlap@hotmail.com', 'Teste2')") or die(mysqli_error($cx));
  

// };

?>