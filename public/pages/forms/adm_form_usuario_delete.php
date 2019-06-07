<?php

require '../../../bootstrap.php';
require "../../../app/function/DB.php";
$id = $_POST['id'];
echo dd($id);
$deleteUser = mysqli_query($cx,"DELETE FROM usuario WHERE usuario.id_user = $id");
//
// header("Location: http://localhost:8081/Tcc/public/?page=adm_usuario");
// die();
//


?>
