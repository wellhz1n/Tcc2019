<?php
require '../../../bootstrap.php';
if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) { 



$id = $_POST["id"];


$nivel = $_POST['nivel_autoridade'];
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="assets/js/site/Events.js"></script>
<script src="assets/js/site/ajax.js"></script>

<section class="col-12 text-center">

<form action="pages/forms/adm_form_usuario_edit.php" id="form1" name="cria" method="POST">
                <div class="col-12 mt-5 text-center form-group">
              <input type="hidden"  value="<?php echo $id;?>" name="id" >
              <br>
              
            
                </div>
                  <h5 class="text-center">Administrador</h5>
                
                  <label style="cursor:pointer;" for="check" class="" ><i id="checado" class="fa   <?php echo $nivel == 0? 'fa-check text-success' : 'fa-times text-danger'; ?>     text-center"></i></label>
                  <input type="hidden"  value="1"   name="nivel_autoridade" >
                  <input type="checkbox" id="check" value="0" <?php echo $nivel == 0? 'checked' : '';?> name="nivel_autoridade" hidden >
                  <br>  
                  <button type="submit" id="Enviar" form="form1" class="btn btn-success">Editar</button>
                </div>

            </form>
</section>
<?php }else{ 

header("Location: http://localhost:8081/Tcc/public/?page=home");
die();
}
  ?>



