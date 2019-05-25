<!-- 

<?php 

#require '../../../bootstrap.php';

#$nome = $_POST['pesqui'];
#$buscaProduto = mysqli_query($cx, "SELECT * FROM produto WHERE nome like '%{$nome}%' ");



?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/site/ajax.js"></script>



<table   class="table col-12    table-responsive-md  text-center table-active table-bordered table-hover ">
        <thead class="thead-dark">
          <tr >
          <th scope="col"  style="display:table-cell; vertical-align: middle;">Imagem</th>
            <th scope="col" style="display:table-cell; vertical-align: middle;">Nome</th>
            <th scope="col" style="display:table-cell; vertical-align: middle;">descrição</th>
            <th scope="col" style="display:table-cell; vertical-align: middle;">Preço</th>
            <th scope="col"><a  href="?page=produto" class='btn btn-primary' ><i class="fa fa-plus"></i>Novo</a>
            
             
            </th>
            
            




          </tr>
          </thead>
          <tbody >
            <?php # if($buscaProduto->num_rows >=1){ while ($pesq = mysqli_fetch_array($buscaProduto)):?>
          <tr style="" class="text-center" > 
            <!-- NO FUTURO IMPLEMENTAR ISSO ondblclick=" document.getElementById('form').submit();" -->

          <!--  <form action="pages/forms/adm_produto_del.php" id="formdel" name="del" method="POST">
                  <input type="text" id="ID" value="<?php# echo $pesq["id"]; $linha = $pesq["id"]; ?> " name="ID" hidden>
                  <input type="text" id="ID" value="<?php #echo $pesq["nome"];  ?> " name="nome" hidden>
                  <input type="text" id="ID" value="<?php# echo $pesq["descricao"];  ?> " name="emadescricao" hidden>
                  <input type="text" id="ID" value="<?php #echo $pesq["valor"];  ?> " name="valor" hidden>



            <td> <img class="" src="assets/img/produto/<?#php echo  $pesq["img"]; ?>"></td>
            <td class="mt-3 " style="display:table-cell; vertical-align: middle;"><?php echo  $pesq["nome"]  ?></td>
            <td style="display:table-cell; vertical-align: middle;"><?php echo  $pesq["descricao"]  ?></td>
            <td style="display:table-cell; vertical-align: middle;"><h5 class="text-danger">R$:<?php echo  $pesq["valor"] ?></h5></td>



            <td style="display:table-cell; vertical-align: middle;" scope="col "><button type="submit"  formaction="pages/forms/adm_form_produto_edit.php" class="btn btn-info"><i class="fa fa-edit"></i>Editar</button>
            <button type="button" id="deleteP"  onclick="ProdutoDel(<?php #echo $linha; ?>);"  class=" deleteP  btn btn-danger"><i class="fa fa-trash"></i>Deletar</button></td>



   </div>      
  </tr >
        </form>
<?php #endwhile;  ?>
        </tbody>
      </table>  

            
    <?php #} else{?>
           
                    <div class="row">

                        <h1><?php echo $nome?> Nao existe</h1>
                    </div>
            
        <?php #} ?> -->