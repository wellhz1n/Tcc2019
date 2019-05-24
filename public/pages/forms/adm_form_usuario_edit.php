<?php 
 require '../../../bootstrap.php';
$id = $_POST["id"];



$nivel = $_POST['nivel_autoridade'] ?? 1 ;
echo $nivel;
$create = mysqli_query($cx,"UPDATE usuario SET  nivel_autoridade = $nivel WHERE usuario.id_user = $id");

header("Location: http://localhost:8081/Tcc/public/?page=adm_usuario");
die();



?>