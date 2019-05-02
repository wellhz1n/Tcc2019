<?php 

require '../../../bootstrap.php';



$usuario =$_POST['usuario'];
$senha = $_POST['senha'];
$Busca = "SELECT * FROM usuario WHERE nome ='$usuario' and senha ='$senha'";
$consulta = mysqli_query($cx,$Busca);

if (mysqli_num_rows($consulta) == 1) {
    session_start();
    $_SESSION["login"] = true;
    $_SESSION["usuario"] = $usuario;
    
    header("Location: http://localhost:8081/Tcc/public/?page=comprar");
    die();
}
else{
   
    

    header("Location: http://localhost:8081/Tcc/public/?page=login");
    die();
}

?>



