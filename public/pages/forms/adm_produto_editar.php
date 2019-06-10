<?php
require '../../../bootstrap.php';
$id = $_POST['ID'];
$nomeEditado = $_POST['modalEditarNome'];
$descricaoEditado = $_POST['modalEditarDescricao'];
$precoEditado = (int) $_POST['modalEditarPreco'];
$create = $produtoDAO->update($nomeEditado, $descricaoEditado, $precoEditado, $id);
/* No futuro, mudar valores para double no sql.*/
if($create){
    header("Location: http://localhost:8081/Tcc/public/?page=adm_produto");
    die();
}
else{
    ?>
<link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.css">
    <div id="erro" class="col-12 text-center">
    <br>
    <h4>Oops, um erro aconteceu, devo consertar.</h4>
    <a class='btn btn-primary' href='javascript:history.back()'>Voltar</a>
    </div>

<?php
    }
?>
