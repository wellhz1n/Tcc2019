<?php 

require '../../../bootstrap.php';



$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);
$Busca = "SELECT * FROM usuario WHERE nome ='$usuario' and senha ='$senha'";
$consulta = mysqli_query($cx,$Busca);

if (mysqli_num_rows($consulta) == 1) {
    session_start();
    $_SESSION["login"] = true;
    $_SESSION["usuario"] = $usuario;
    while($log = mysqli_fetch_array($consulta)):
        $_SESSION["nivel"] = $log["nivel_autoridade"];
    endwhile;
    
    header("Location: http://localhost:8081/Tcc/public/?page=adm_contato");
    die();
}
else{
   
    

    header("Location: http://localhost:8081/Tcc/public/?page=login");
    die();
}

?>



