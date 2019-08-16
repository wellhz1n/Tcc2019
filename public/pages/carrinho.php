<?php
$select = mysqli_query($cx, "select c.id,c.idproduto,c.idusuario,p.nome as nome
from carrinho as c
inner join produto 
as p on p.id = c.idproduto WHERE c.idusuario = '{$_SESSION['id']}'");

while ($b = mysqli_Fetch_Array($select)) {

    ?>
    <form action="pages/forms/comprar.php" method="post">

        <input type="hidden" name="OP" value="DEL">
        <p><?php echo $b['nome'] ?></p>
        <button type="submit" value="<?php echo $b['idproduto']; ?> " name="ID">X</button>

        <form>
        <?php }
        ?>