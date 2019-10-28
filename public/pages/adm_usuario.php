
<?php

if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) {
  if(!isset($_SESSION['tuser'])){

    $_SESSION['tuser'] = 0;
  }

  $tipo = $_POST['selecionar']?? $_SESSION['tuser'] ;

  $_SESSION['tuser'] = $tipo;
  switch ($tipo) {
    case '0':

    $sql_usuario = $usuarioDAO->select(null,0) or die(
      mysqli_error($cx));
          break;
      case '1':


      $sql_usuario = $usuarioDAO->select(null,1) or die(
          mysqli_error($cx));
          break;
          case '2':


          $sql_usuario =$usuarioDAO->select(null,2) or die(
              mysqli_error($cx));
          break;

      default:

          break;
  }

        ?>
          <div id="mod-edit" class="mod-edit   " >
              <div class="content rounded">
                  <button id='fechar' class="close border-dark " title="Fechar" ><i  class="fa fa-times text-danger x-icon"></i></button>
                  <div id="result"></div>
                  </div>
                </div>
 <section   class="col-12 text-center">
    <div class="row">
      <div class="col-12 text-center my-2">

        <form action="" enctype="multipart/form-data" id="selec" method="POST">
            <select id="selecionar"  name="selecionar" style="transition: .1s;" class="selectpicker col-3"  data-style="btn-primary" >
                <option  <?php if($_SESSION['tuser'] == 0) echo "selected"; ?>  data-icon="fa fa-users" value="0">Todos</option>
                <option   <?php if($_SESSION['tuser'] == 1) echo "selected"; ?>    data-icon="fa fa-user-lock" value="1">Administradores</option>
                <option  <?php if($_SESSION['tuser'] == 2) echo "selected"; ?>    data-icon="fa fa-user" value="2">Usuário Comum</option>

            </select>
        </form>


          <!--       <button class="btn btn-primary mx-2 my-2" type="button"><i class="fa fa-check "></i>Administradores</button>
                     <button class="btn btn-primary mx-2 my-2"   type="button">Usuários Comuns</button> -->
      </div>

        <div  id="resultado" class="w-100" >
    <table class="table w-100 text-center table-active table-bordered table-hover ">
        <thead class="thead-dark">
          <tr class="col-4">

            <th scope="col">Nome</th>

            <th scope="col">Administrador</th>

            <th> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-plus"></i>Novo</button></th>


          </tr>
        </thead>
        <tbody >
            <?php   while ($pes = mysqli_fetch_array($sql_usuario)):?>
              <form action="?page=adm_usuario_edit" id="formedit" name="del" method="POST">
          <tr   >
             <!-- NO FUTURO IMPLEMENTAR ISSO ondblclick=" document.getElementById('formedit').submit();" -->

              <input type="hidden"  value="<?php echo $pes["id_user"];  $linha = $pes['id_user'];  $nome = $pes['nome'] ;
              $autoridade =  $pes['nivel_autoridade'];  ?>" name="id" >


                  <td  ondblclick="LevaUsuarioId(<?php echo $linha; ?>, '<?php echo $nome;?>' ,<?php echo $autoridade; ?>)" ><?php  echo  $pes["nome"];  ?></td>

                  <td ondblclick="LevaUsuarioId(<?php echo $linha; ?>,'<?php echo $nome;?>',<?php echo $autoridade; ?>)"><?php echo  $pes["nivel_autoridade"] == 0?"<i  class='fa fa-check text-success text-center'></i>":"<i  class='fa fa-times text-danger text-center'></i>";  ?></td>

                  <td><button type="button" onclick="LevaUsuarioId(<?php echo $linha; ?>,'<?php echo $nome;?>',<?php echo $autoridade; ?>)"  class="btn mb-2 btn-info"><i class="fa fa-edit"></i>Editar</button>
                    <button type="button" onclick="DeleteUsuario(<?php echo $linha; ?>)" class="btn mb-2 btn-danger"><i class="fa fa-trash"></i>Deletar</button></td>



                </tr>
              </form>
          <?php endwhile; ?>

        </tbody>
      </table>
      </div>
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
      <div id="modb" class="modal-body">


      <form   autocomplete="off" id="form1" name="cria" method="POST">
                <div class="col-12 text-center form-group">
                    <label for="nome" class="float-left">Nome</label>
                  <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" required>
                  <div id="erro" class="alert-danger rounded text-center">

                  </div>

                  <label for="senha" class="float-left">Senha</label>
                  <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" required>
                  <h5 class="text-center">Administrador</h5>
                  <label for="check" class="" ><i id="checado" class="fa fa-check text-success text-center"></i></label>
                  <input type="hidden"  value="1"    name=" autoridade nivel_autoridade" >
                  <input type="checkbox" id="check" value="0"  checked  name="autoridade nivel_autoridade" hidden >

                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="button" onclick="NovoUsuario()" class="btn btn-success">Criar</button>
      </div>
    </div>
  </div>
</div>


<?php }elseif (isset($_SESSION["login"])&& $_SESSION["nivel"] == 1) {

    header("Location:$location/Tcc2019/public/?page=home");
    die();
?>
<?php } else{
    header("Location:$location/Tcc2019/public/?page=home");
    die();

} ?>
