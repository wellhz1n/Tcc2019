<?php
//iniciando a conexão com o banco de dados
$cx = mysqli_connect("127.0.0.1", "root", "");

//selecionando o banco de dados
$db = mysqli_select_db($cx, "Tcc") or die(criaDB());

// //criando a query de consulta à tabela criada
$sql_contato = mysqli_query($cx, "SELECT * FROM contato ORDER BY data_envio DESC ") or die(
  mysqli_error($cx) //caso haja um erro na consulta
);
<<<<<<< HEAD
=======

>>>>>>> 198dc28f5afc4211918edf058721bbe60e26fadd



?>
