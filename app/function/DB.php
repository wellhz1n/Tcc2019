<?php

$acao = $_POST['action'] ?? null;

$cx = mysqli_connect("127.0.0.1", "root", "");
function GerarDB($path)
{
  
  if ($path == null)
    $path = "../DB/db1/Tcc.sql";
  else
    $path = $path;
  
  $cx = mysqli_connect("127.0.0.1", "root", "");
  mysqli_query($cx, "Drop Database tcc");
  $arq = file_get_contents($path);
  if ($arq != null) {
    mysqli_query($cx, "CREATE DATABASE Tcc");
    mysqli_select_db($cx, "Tcc");
    $gerar = mysqli_multi_query($cx, $arq);
    if ($gerar) {
      ?> <script>
        alert("Banco Criado Com sucesso!");
      </script><?php

              }
            }

            return $gerar;
          }
          //selecionando o banco de dados
          $db = mysqli_select_db($cx, "Tcc");
          if (!$db) {
            GerarDB(null);
            $db = mysqli_select_db($cx, "Tcc");
          }
          // //criando a query de consulta à tabela criada
          //caso haja um erro na consulta
          
          switch ($acao) {
            case 'gerar':
              GerarDB("../../DB/db1/Tcc.sql");
              break;

            default:
              # code...
              break;
          }

          ?>