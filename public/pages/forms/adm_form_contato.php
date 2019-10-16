<?php 

require '../../../bootstrap.php';
require "../../../app/function/DB.php";


    $ID = $_POST['ID'];
echo $ID;
    mysqli_query($cx,"DELETE FROM contato WHERE contato.id = $ID");
    header("Location: http://localhost:8081/Tcc2019/public/?page=adm_contato");
    die();





?>