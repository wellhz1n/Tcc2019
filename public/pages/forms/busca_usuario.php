<?php

require '../../../bootstrap.php';

$nome = $_POST['nome'];
$buscaUsuario = mysqli_query($cx, "SELECT * FROM usuario WHERE nome = '{$nome}' ");
$linhas = $buscaUsuario->num_rows;
if($linhas >= 1){

  
?>
  <span class="  mt-5   text-danger"><i class=" text-danger fa fa-exclamation-triangle"></i>Esse Nome ja existe.</span>
                  <br>
                
               
<?php } else{?>

<?php }?>
        
