<?php
require '../../../bootstrap.php';

$id = $_POST["ID"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];

$update = "UPDATE contato SET Nome = '$nome' , Email = '$email' , Assunto = '$assunto' WHERE contato.id = $id;";
$up =mysqli_query($cx,$update);


    header("Location: http://localhost:8081/Tcc2019/public/?page=adm_contato");
    die();







?>