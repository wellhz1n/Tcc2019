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
}
