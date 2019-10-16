<?php
if( isset($_SESSION['login'], $_SESSION['id']) ){
    $ID = $_SESSION["id"];
    $busca = mysqli_query($cx,"SELECT * FROM usuario WHERE id_user = $ID");
    while($usuario = mysqli_fetch_array($busca)) :
?>

<div style="background:gray;" class=" cont text-center ">
<?php if($usuario['img'] != ""){ ?>
        <img  class ="rounded-circle my-5" src="assets/img/usuario/<?php echo $usuario['img'];  ?>" >
<?php } else{?>
   <i style="color: #62377e; background: #fff; border-radius:100%; border: solid #fff 4px" class=" my-5 fas fa-user-circle fa-10x" aria-hidden></i>
<?php } ?>
    <h1>Bem Vindo <label class="text-danger"><?php echo $usuario['nome']; ?></label> </h1>
    <button type="button" onclick="window.location.href ='http://localhost:8081/Tcc2019/public/?page=usuario_editar_conta ' "  href="?page=usuario_foto" class='btn btn-primary '>Mudar Imagem de perfil</button>



</div>

    <?php endwhile; }else{}?>
