<?php


if(isset($_SESSION['login'])){
$id = $_SESSION['id'];
$con = mysqli_query($cx,"SELECT * FROM usuario WHERE usuario.id_user = $id");
while($user = mysqli_fetch_array($con)):
?>
<div style="background:gray;" class=" cont text-center ">
   <?php if($user['img'] != ''){
?>

     <img class="rounded-circle my-5" src="assets/img/usuario/<?php echo $user['img'];   ?>" >
   <?php   } else{   ?> <div class="ft"></div><?php } ?>
  <h1 name"no" class=""><?php echo $user['nome']; ?></h1>



</div>
<?php endwhile; } else{
       header("Location: http://localhost:8081/Tcc/public/?page=home");
       die();
}?>
