<?php
if( isset($_SESSION['login'], $_SESSION['id']) && $_SESSION['nivel'] == 0 ){
    $ID = $_SESSION["id"];
    $busca = mysqli_query($cx,"SELECT * FROM usuario WHERE id_user = $ID");
    while($usuario = mysqli_fetch_array($busca)) :
?>

<div style="background:gray;" class=" cont text-center ">
    <div class="ft"></div>
    <h1>Bem Vindo <label class="text-danger"><?php echo $usuario['nome']; ?></label> </h1>
    
    
    
    
</div>

    <?php endwhile; }else{}?>