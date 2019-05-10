<?php

if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) { 


$nome = $_POST["nome"];
$id = $_POST["id"];


$senha = $_POST['senha'];
$nivel = $_POST['nivel_autoridade'];
?>

<section class="col-12 text-center offset-3">

<form action="pages/forms/adm_form_usuario_edit.php" id="form1" name="cria" method="POST">
                <div class="col-6 mt-5 text-center form-group">
              <input type="hidden"  value="<?php echo $id;?>" name="id" >

                    <label for="nome" class="float-left">Nome</label>
                  <input type="text" class="form-control" value="<?php echo $nome ?>" name="nome">
                 
                  <h5 class="text-center">Administrador</h5>
                  <label for="check" class="" ><i id="checado" class="fa   <?php echo $nivel == 0? 'fa-check text-success' : 'fa-times text-danger'; ?>     text-center"></i></label>
                  <input type="hidden"  value="1"   name="nivel_autoridade" >
                  <input type="checkbox" id="check" value="0" <?php echo $nivel == 0? 'checked' : '';?> name="nivel_autoridade" hidden >
                  <br>  
                  <button type="submit" form="form1" class="btn btn-success">Editar</button>
                </div>

            </form>
</section>
<?php }else{ 

header("Location: http://localhost:8081/Tcc/public/?page=home");
die();
}
  ?>



