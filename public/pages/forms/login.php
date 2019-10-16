<?php

require '../../../bootstrap.php';



$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);
$Busca = "SELECT * FROM usuario WHERE nome ='$usuario' and senha ='$senha'";
$consulta = mysqli_query($cx,$Busca);

if (mysqli_num_rows($consulta) == 1) {
    session_start();
    $_SESSION["login"] = true;
    $_SESSION["usuario"] = $usuario;
    while($log = mysqli_fetch_array($consulta)):
        $_SESSION["nivel"] = $log["nivel_autoridade"];
        $_SESSION['id'] = $log['id_user'];
    endwhile;
    $buscaconf = mysqli_query($cx,"SELECT * FROM configuracoes WHERE chave = 'DESABILITACONTATO' AND idusuario = '{$_SESSION['id']}'  ");

    if(mysqli_num_rows($buscaconf) ==0 ){

      if($_SESSION['nivle'] == 0){

        $inserir = mysqli_query($cx,"INSERT INTO configuracoes (chave,ativo,idusuario) VALUES('DESABILITACONTATO',0,'{$_SESSION['id']}')");

      }
    }


    header("Location: http://localhost:8081/Tcc2019/public/?page=adm_inicio");
    die();
}
else{
    session_start();

    http_response_code(502);
        $_SESSION[err] = "Nome ou Senha Incorretos";
    header("Location: http://localhost:8081/Tcc2019/public/?page=login");
    die();
}

?>
