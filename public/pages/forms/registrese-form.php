<?php 

require '../../../bootstrap.php';



$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);
    if($senha !="" && $usuario != ""){

            $Criar =  mysqli_query($cx,"INSERT INTO usuario (nome,senha,nivel_autoridade)VALUES('$usuario','$senha', 1) "); 
        if ($Criar) {
                session_start();
                $_SESSION['sucesso'] = 'Usuario Registrado';
            header("Location: http://localhost:8081/Tcc/public/?page=login");
            die();
            }
              
        else{
            session_start();

            http_response_code(502);
                $_SESSION[erro] = "Falha Usuario Existente";
            header("Location: http://localhost:8081/Tcc/public/?page=registrese");
            die();
        }
    }

    else{
        session_start();

        http_response_code(502);
            $_SESSION[erro] = "Nome e Senha nao podem ser nulos";
        header("Location: http://localhost:8081/Tcc/public/?page=registrese");
        die();
    }

?>



