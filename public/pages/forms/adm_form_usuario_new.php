<?php 
 require '../../../bootstrap.php';
$nome = $_POST["nome"];
$senha = md5($_POST['senha']);
$nivel = $_POST['nivel_autoridade'] ?? 1 ;
echo $nivel;
$create = mysqli_query($cx,"INSERT INTO usuario (nome,senha,nivel_autoridade)VALUES('$nome','$senha',$nivel)");

header("Location: http://localhost:8081/Tcc/public/?page=adm_usuario");
die();



?>