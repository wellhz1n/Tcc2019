<?php
 require '../../../bootstrap.php';
$nome = $_POST["nome"];
$senha = md5($_POST['senha']);
$nivel = $_POST['nivel_autoridade'] ?? 1 ;

$create = $usuarioDAO->inserir($nome,$senha,$nivel);
if($create){
    header("Location:$location/Tcc2019/public/?page=adm_usuario");
    die();

}
else{
     die(header("HTTP/1.0 500 Not Found"));
    ?>
<link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.css">
    <div id="erro" class="col-12 text-center">
    <br>
    <h4>O Nome De Usuario <label class="text-danger"><?php echo $nome ?></label> já existe, por favor, volte e insira um nome diferente.</h4>
    <a class='btn btn-primary' href='javascript:history.back()'>Voltar</a>
    </div>
<?php } ?>
