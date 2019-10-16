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
   <?php   } else{   ?>  <i style="color: #62377e; background: #fff; border-radius:100%; border: solid #fff 4px" class=" my-5 fas fa-user-circle fa-10x" aria-hidden></i><?php } ?>
  <h1 name"no" class=""><?php echo $user['nome']; ?></h1>



</div>
<?php endwhile; } else{
       header("Location: http://localhost:8081/Tcc2019/public/?page=home");
       die();
}?>
