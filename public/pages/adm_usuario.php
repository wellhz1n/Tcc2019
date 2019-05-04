<?php
if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) { 
    $sql_usuario = mysqli_query($cx,"SELECT * FROM usuario") or die( 
        mysqli_error($cx));
    
    
    ?>  
 <section class="col-12">
    <div class="row">
    <table class="table w-100 text-center table-active table-bordered table-hover table-striped">
        <thead class="thead-dark">
          <tr class="col-4">
            
            <th scope="col">Nome</th>
            
            <th scope="col">Adiministrador</th>
       
            <th> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-plus"></i>Novo</button></th>


          </tr>
        </thead>
        <tbody>
            <?php   while ($pes = mysqli_fetch_array($sql_usuario)):?>
          <tr ondblclick=" document.getElementById('formedit').submit();">
              <form action="?page=adm_usuario_edit" id="formedit" name="del" method="POST">

              <input type="hidden"  value="<?php echo $pes["id_user"];?>" name="id" >
              <input type="text" value="<?php echo $pes["nome"];  ?> " name="nome" hidden>
              <input type="text" value="<?php echo $pes["senha"];  ?> " name="senha" hidden>
              <input type="text"  value="<?php echo $pes["nivel_autoridade"];  ?> " name="nivel_autoridade" hidden>
                  <td><?php  echo  $pes["nome"];  ?></td>
                  
                  <td><?php echo  $pes["nivel_autoridade"] == 0?"<i  class='fa fa-check text-success text-center'></i>":"<i  class='fa fa-times text-danger text-center'></i>";  ?></td>
                  
                  <td><button type="submit"  class="btn mb-2 btn-info"><i class="fa fa-edit"></i>Editar</button> 
                    <button type="submit"  formaction="pages/forms/adm_form_usuario_delete.php"  class="btn mb-2 btn-danger"><i class="fa fa-trash"></i>Deletar</button></td>
                    
                    
                    
                    
                </tr>
              </form>
          <?php endwhile; ?>
                
        </tbody>
      </table>
</div>


</section> 
<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     

      <form action="pages/forms/adm_form_usuario_new.php" id="form1" name="cria" method="POST">
                <div class="col-12 text-center form-group">
                    <label for="nome" class="float-left">Nome</label>
                  <input type="text" class="form-control" placeholder="Nome" name="nome">
                  <label for="senha" class="float-left">Senha</label>
                  <input type="password" class="form-control" placeholder="Senha" name="senha">
                  <h5 class="text-center">Adiministrador</h5>
                  <label for="check" class="" ><i id="checado" class="fa fa-check text-success text-center"></i></label>
                  <input type="hidden"  value="1"   name="nivel_autoridade" >
                  <input type="checkbox" id="check" value="0" checked  name="nivel_autoridade" hidden >
                  
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="submit" form="form1" class="btn btn-success">Criar</button>
      </div>
    </div>
  </div>
</div>





<?php }elseif (isset($_SESSION["login"])&& $_SESSION["nivel"] == 1) {

    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();
?>
<?php } else{
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();

} ?>



