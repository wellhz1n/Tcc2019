<?php


$cx = mysqli_connect("127.0.0.1", "root", "");

//selecionando o banco de dados
$db = mysqli_select_db($cx, "Tcc");
if (!$db) {
  $arq = "DB/db1/Tcc.sql";
  if ($arq != null) {
    mysqli_query($cx, "CREATE DATABASE Tcc");
    $db = mysqli_select_db($cx, "Tcc");
    $gerar = mysqli_query($cx,"mysql -u username -p database_name < '{$arq}'");
    if ($gerar) {
      ?> <script>
        alert("Banco Criado Com sucesso!");
      </script><?php
              }
            }
          }
          // //criando a query de consulta à tabela criada
          $sql_contato = mysqli_query($cx, "SELECT * FROM contato ORDER BY data_envio DESC ") or die(mysqli_error($cx) //caso haja um erro na consulta
          );


          ?>