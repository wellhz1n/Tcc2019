<?php

$buscaP = $produtoDAO->select(null);
if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) { ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/bootstrap/jquery-3.3.1.js"></script>

 <section class="col-12">
   <div class="row">
    <div class=" w-100" id="resultado">
    <table class="table col-12 w-100 text-center table-active table-bordered table-hover ">
        <thead class="thead-dark">
          <tr>
          <th scope="col">Imagem</th>
            <th scope="col">Nome</th>
            <th scope="col">descrição</th>
            <th scope="col">Preço</th>
            <th scope="col"><a  href="?page=produto" class='btn btn-primary' ><i class="fa fa-plus"></i>Novo</a></th>






          </tr>
          </thead>
          <tbody>
            <?php while ($pesq = mysqli_fetch_array($buscaP)):?>
          <tr  <?php if ($pesq['id']!=17) {?> style="" class="text-center" >
            <!-- NO FUTURO IMPLEMENTAR ISSO ondblclick=" document.getElementById('form').submit();" -->

            <form  id="form" name="del" method="POST">
                  <input type="text" id="ID" value="<?php echo $pesq["id"]; $linha = $pesq['id']; $nome = $pesq['nome']; ?> " name="ID" hidden>
                  <input type="text" id="ID" value="<?php echo $pesq["nome"];  ?> " name="nome" hidden>
                  <input type="text" id="ID" value="<?php echo $pesq["descricao"];  ?> " name="emadescricao" hidden>
                  <input type="text" id="ID" value="<?php echo $pesq["valor"];  ?> " name="valor" hidden>



            <td> <img class="rounded-circle w-25 h-25 " src="assets/img/produto/<?php echo  $pesq["img"]; ?>"></td>
            <td class="mt-3 " style="display:table-cell; vertical-align: middle;"><?php echo  $pesq["nome"]  ?></td>
            <td style="display:table-cell; vertical-align: middle;"><?php echo  $pesq["descricao"]  ?></td>
            <td style="display:table-cell; vertical-align: middle;"><h5 class="text-danger">R$:<?php   echo  $pesq["valor"] ?></h5></td>



            <td style="display:table-cell; vertical-align: middle;" scope="col "><button type="button" class="btn btn-primary" onclick="guardarNome('<?php echo $nome;?>','<?php echo $pesq['descricao'];?>','<?php echo $pesq['valor'];?>','<?php echo $linha ?>');" data-toggle="modal" data-target="#ModalEditar" class="my-1 btn btn-info"  <?php if ($pesq['id'] == 17) {
              echo 'hidden';
            } ?> ><i class="fa fa-edit"></i>Editar</button>
            <button type="button" id="deleteP" onclick="ProdutoDel(<?php echo $linha; ?>);"  class=" my-1 deleteP  btn btn-danger" <?php if ($pesq['id'] == 17) {
              echo 'hidden';
            } ?> ><i class="fa fa-trash"></i>Deletar</button></td>


        </tr >
            <?php } else {
} ?>
        </form>
<?php endwhile; ?>

        </tbody>
      </table>
  </div>
</div>
</section>

<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="ModalEditar" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEditar">Editando <span id="valorRetornoModal"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formModalEditar" action="pages/forms/adm_produto_editar.php" method="post">
          <div class="form-group">
          <input type="hidden" id="idmod" name="ID">
            <label for="modalEditarNome" class="col-form-label">Mudar o nome:</label>
            <input type="text" name="modalEditarNome" id="nomemod" class="form-control" value="" id="modalEditarNome">
          </div>
          <div class="form-group">
            <label for="modalEditarDescricao" class="col-form-label">Mudar a descrição:</label>
            <input type="text" name="modalEditarDescricao" id="descmod"  class="form-control" id="modalEditarDescricao">
          </div>
          <div class="form-group">
            <label for="modalEditarPreco" class="col-form-label">Mudar o preço:</label>
            <input type="text"  name="modalEditarPreco" id="valmod"  class="form-control" id="modalEditarPreco" maxlength="10">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" name="submitModal" id="editmodprod" form="formModalEditar" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>


<?php } elseif (isset($_SESSION["login"])&& $_SESSION["nivel"] == 1) {
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die(); ?>
<?php
} else {
        header("Location: http://localhost:8081/Tcc/public/?page=home");
        die();
    } ?>
