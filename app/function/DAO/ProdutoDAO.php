<?php 
 $cx = mysqli_connect("127.0.0.1", "root", "","Tcc");
class Produto {
    public $nome;
    public $descricao;
    public $img;
    public $valor;

    public function select($Order){
        if(!isset($Order)||empty($Order)){
           $Order = "DESC";
        }
        global $cx;       
         $query = mysqli_query($cx,"SELECT * FROM produto WHERE id <> 17 ORDER BY valor ".$Order);
        return $query;
    }


    public function selectID($Id){
        global $cx;              
        $query = mysqli_query($cx,"SELECT * FROM produto WHERE  id = '{$Id}'");
        return $query;
    }

    public function delete($Id){
        global $cx;              
        $query =  mysqli_query($cx,"DELETE FROM produto WHERE id = '{$Id}'");
        return $query;
    }
   
    public function inserir($nome,$desc,$valor,$nome_imagem){
        global $cx;              
        $query = mysqli_query($cx,"INSERT INTO 
                    produto (nome,descricao,valor,img)
                    VALUES ('{$nome}','{$desc}', '{$valor}', '{$nome_imagem}')");

        return $query;
    }
   


}


   