<?php
require '../../../bootstrap.php';


if( isset($_SESSION['login'], $_SESSION['id']) ){
    $idproduto = $_POST['ID'];
    echo $idproduto;
    $op = $_POST['OP'];
    

    $iduser = $_SESSION['id'];
    echo $iduser;
    $existe = mysqli_query($cx,"SELECT * FROM carrinho where idproduto = '{$idproduto}' and idusuario = '{$iduser}'");
            while($a = mysqli_fetch_array($existe)){
                    if($a['idproduto'] == $idproduto){
                        $op = "";
                    }
            }
    switch ($op) {
      case "INS":

            $insert = mysqli_query($cx,"insert into carrinho(idproduto,idusuario) values('{$idproduto}','{$iduser}')");

            if($insert){
            header("Location:$location/Tcc2019/public/?page=carrinho");
            die();
            }

        break;
        case "DEL":
             echo $idproduto;
            $del = mysqli_query($cx,"delete from carrinho where idproduto = '{$idproduto}'");

            if($del){
            header("Location:$location/Tcc2019/public/?page=carrinho");
            die();
            }
        break;
      default:
            header("Location:$location/Tcc2019/public/?page=carrinho");
            die();
        break;
    }


}
else {
    header("Location:$location/Tcc2019/public/?page=home");
    die();
}
?>
