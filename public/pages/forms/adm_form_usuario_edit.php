<?php 
 require '../../../bootstrap.php';
$id = $_POST["id"];



$nivel = $_POST['nivel_autoridade'] ?? 1 ;
echo $nivel;
$create =$usuarioDAO->update($id,$nivel);

header("Location: http://localhost:8081/Tcc2019/public/?page=adm_usuario");
die();



?>