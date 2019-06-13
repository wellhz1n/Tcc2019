<?php
require '../../../bootstrap.php';


if( isset($_SESSION['login'], $_SESSION['id']) ){
    $idproduto = $_POST['ID'];
    $op = $_POST['OP'];
    echo $idproduto;

    $iduser = $_SESSION['id'];
    echo $iduser;

    switch ($op) {
      case "INS":
           $existe = mysqli_query($cx,"SELECT 1 FROM carrinho where idproduto = '{$idproduto}'");
            
            $insert = mysqli_query($cx,"insert into carrinho(idproduto,idusuario) values('{$idproduto}','{$iduser}')");

            if($insert){
            header("Location: http://localhost:8081/Tcc/public/?page=carrinho");
            die();
            }
        
        break;
        case "DEL":
            $del = mysqli_query($cx,"delete from carrinho where idproduto = '{$idproduto}'");

            if($del){
            header("Location: http://localhost:8081/Tcc/public/?page=carrinho");
            die();
            }
        break;
      default:
        # code...
        break;
    }


}
else {
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();
}
?>