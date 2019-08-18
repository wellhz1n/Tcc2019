<?php
require('../Entidades/CarteiraEntidade.php');
$cx = mysqli_connect("127.0.0.1", "root", "", "Tcc");
class CarteiraDAO
{
    public function select($id,$Order)
    {
        if (!isset($Order) || empty($Order)) {
            $Order = "DESC";
        }
        global $cx;
        $query = mysqli_query($cx, "SELECT * FROM carteira where idUsuario = $id  ORDER BY id " . $Order);
        return $query;
    }
    public function InsertMoney($valor,$idusuario,$OP)//OP 0  insert, OP 1 Update
    {
        global $cx;
        $query = null;
        switch ($OP) {
            case 0:
                $query = mysqli_query($cx,"INSERT INTO carteira (dinheiro,idUsuario) 
                                            VALUES($valor,$idusuario)"); 
                break;
            
            default:
                $query = mysqli_query($cx,"UPDATE carteira 
                                            SET dinheiro = $valor 
                                            WHERE idUsuario = $idusuario");
                break;
        }
      return $query;
    }
}

