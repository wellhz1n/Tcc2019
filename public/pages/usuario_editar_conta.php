<?php


if(isset($_SESSION['login'])){
$id = $_SESSION['id'];
$con = mysqli_query($cx,"SELECT * FROM usuario WHERE usuario.id_user = $id");
while($user = mysqli_fetch_array($con)):
?>
<div style="background:gray;" class=" cont text-center ">
   <?php if($user['img'] != ''){
   ?>
              <img class="rounded-circle my-5" src="assets/img/usuario/<?php echo $user['img'];   ?>" />

  <?php   } else{
  ?>         <div><label for="imgUpload" id="imageFilho"class="imagemDefault my-5 fas fa-user-circle"><div id="cameraHover"><i class="fas fa-camera" id="cameraIcon"></i></div></label></div>

  <?php } ?>
    <form name="formft" enctype="multipart/form-data"  action="pages/forms/usuario_edit_img.php" id="form" method="POST">
        <button type="submit" name="envia"  id ="usftedit" class=" btn  btn-primary ">Editar</button>
        <input type="file" id="imgUpload"  name="img" class="form-control-file" >

    </form>


</div>
<?php endwhile; } else{
       header("Location: http://localhost:8081/Tcc/public/?page=home");
       die();
}?>
