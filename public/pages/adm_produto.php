<?php

$buscaP = mysqli_query($cx,"SELECT * FROM produto");
if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) { ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <section class="col-12 text-center w-100">
   <form class="" id="pesquisa" method="POST">
       
       <div class=" offset-10 col-2 my-3">
           <div class="input-group">
             <input class="form-control border-primary" id="pesquisar" name="pesqui" type="search" placeholder="Pesquisar" aria-label="Search" style="border-right: none;">
             <div class="input-group-append">
               <div class="input-group-text border-primary" style="background-color: #5555"><i class="fas fa-search"></i></div>
             </div>
           </div>
         </div>
     </form>

   <div id="resultado" >
     
    <table  class="table col-md-12 my-5 w-100 table-responsive-md  text-center table-active table-bordered table-hover ">
        <thead class="thead-dark">

          <tr >
          <th scope="col"  style="display:table-cell; vertical-align: middle;">Imagem</th>
            <th scope="col" style="display:table-cell; vertical-align: middle;">Nome</th>
            <th scope="col" style="display:table-cell; vertical-align: middle;">descrição</th>
            <th scope="col" style="display:table-cell; vertical-align: middle;">Preço</th>
            <th class="" scope="col "><a  href="?page=produto" class='btn btn-primary' ><i class="fa fa-plus"></i>Novo</a></th>

            </tr>
          </thead>
          <tbody   >
            <?php   while ($pesq = mysqli_fetch_array($buscaP)):?>
          <tr style="" class="text-center" >
            <!-- NO FUTURO IMPLEMENTAR ISSO ondblclick=" document.getElementById('form').submit();" -->

            <form action="pages/forms/adm_form_produto_edit.php" id="form" name="del" method="POST">
                  <input type="text" id="ID" value="<?php echo $pesq["id"];  ?> " name="ID" hidden>
                  <input type="text" id="ID" value="<?php echo $pesq["nome"];  ?> " name="nome" hidden>
                  <input type="text" id="ID" value="<?php echo $pesq["descricao"];  ?> " name="emadescricao" hidden>
                  <input type="text" id="ID" value="<?php echo $pesq["valor"];  ?> " name="valor" hidden>



            <td> <img class="" src="assets/img/produto/<?php echo  $pesq["img"]; ?>"></td>
            <td class="mt-3 " style="display:table-cell; vertical-align: middle;"><?php echo  $pesq["nome"]  ?></td>
            <td style="display:table-cell; vertical-align: middle;"><?php echo  $pesq["descricao"]  ?></td>
            <td style="display:table-cell; vertical-align: middle;"><h5 class="text-danger">R$:<?php echo  $pesq["valor"] ?></h5></td>



            <td style="display:table-cell; vertical-align: middle;" scope="col "><button type="submit"  formaction="pages/forms/adm_form_produto_edit.php" class="btn btn-info"><i class="fa fa-edit"></i>Editar</button>
            <button type="submit" id="deleteP" formaction="pages/forms/adm_produto_del.php" class=" deleteP  btn btn-danger"><i class="fa fa-trash"></i>Deletar</button></td>



   </div>      
  </tr >
        </form>
        <?php endwhile; ?>
        
                </tbody>
              </table>



   </div>      



</section>



<?php }elseif (isset($_SESSION["login"])&& $_SESSION["nivel"] == 1) {

    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();
?>
<?php } else{
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();

} ?>
