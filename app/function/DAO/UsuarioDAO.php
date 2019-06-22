<?php
 $cx = mysqli_connect("127.0.0.1", "root", "","Tcc");
class Usuario {
    private $Nome;
    private $Senha;
  
    private $Img;
    private $Nivel;
  public  function setUsuario($n,$s,$ni,$i){
        $this->Nome = $n;
        $this->Senha = $s;
        $this->Nivel = $ni ;
        $this->Img = $i ?? null;
       
    }
    //Metodo completo, caso nao tenha id nem operacao ele executara uma busca geral, caso tenha id e nao tenha operacao ele faz uma busca por id,
    //caso nao tenha id mas tenha operacao com o valor 0 ele retorna uma busca ordenada ASC caso seja valor 1 retorna uma busca com o nivel de 
    //autoridade 0 e caso o valor seja 2 retorna o nivel de autoridade 1
    public function select($id,$op){
        $id ?? null;
        $op ?? null;
        global $cx;
        if($id == null){
            switch ($op) {
                case 0:
                 $query = mysqli_query($cx,"SELECT * FROM usuario order by nome ASC");
                    break;
                case 1 :
                $query = mysqli_query($cx,"SELECT * FROM usuario WHERE nivel_autoridade = 0   ORDER BY nome ASC");
                break;
                case 2 :
                $query = mysqli_query($cx,"SELECT * FROM usuario WHERE nivel_autoridade = 1   ORDER BY nome ASC");
                break;
                default:
                    $query = mysqli_query($cx,"SELECT * FROM usuario");
                    break;
            }
        
        return $query;
        }
        else{
            $query = mysqli_query($cx,"SELECT * FROM usuario WHERE usuario.id_user = $id");
            return $query;
        }
    }



    public function deletar($id){
        global $cx;
        $query = mysqli_query($cx,"DELETE FROM usuario  WHERE usuario.id_user = $id ");
        return $query;
    }

    public function inserir($nome,$senha,$nivel){
        global $cx;
     
       
            $query = mysqli_query($cx,"INSERT INTO usuario (nome,senha,nivel_autoridade) VALUES('{$nome}','{$senha}',$nivel )");
            return $query;
    }
    public function inserirImagem($op,$img,$id){ //$op valor 1 insere nova imagem, valor 2  faz select para ocorrer o unlink
        global $cx;
         $query;
        switch ($op) {
            case 1:
                $query = mysqli_query($cx,"UPDATE  usuario set usuario.img = '{$img}' WHERE usuario.id_user = $id "); 
                break;
            case 2:
               $query =  mysqli_query($cx,"SELECT img FROM usuario WHERE usuario.id_user = '".$id."'");
                break;
            default:
                # code...
                break;
        }
        return $query;
    }
    public function update($id,$nivel){
        global $cx;
        $query =  mysqli_query($cx,"UPDATE usuario SET  nivel_autoridade = $nivel WHERE usuario.id_user = $id");

        return $query;
    }



}