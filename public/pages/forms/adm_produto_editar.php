<?php
require '../../../bootstrap.php';
$id = $_COOKIE['profile_viewer_uid'];
$nomeEditado = $_POST['modalEditarNome'];
$create = mysqli_query($cx,"UPDATE produto SET nome = '$nomeEditado' WHERE id = $id;");
if($create){
    header("Location: http://localhost:8081/Tcc/public/?page=adm_produto");
    die();
}
