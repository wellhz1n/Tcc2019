<?php

class Carteira
{
    private $Id;
    private $Dinheiro;
    private $IdUsuario;

    function Carteira($dinheiro, $idusuario)
    {
        $this->Dinheiro = $dinheiro;
        $this->IdUsuario = $idusuario;
    }
    function CarteiraSet($id, $dinheiro, $idusuario)
    {
        $this->Id = $id;
        $this->Dinheiro = $dinheiro;
        $this->IdUsuario = $idusuario;
    }
    function getValor($value){
        return $this->$value;
    }
    function setValor($name,$valor){
         $this->$name = $valor;
    }
}
