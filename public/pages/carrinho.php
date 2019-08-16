<?php
$select = mysqli_query($cx,"select c.id,c.idproduto,c.idusuario,p.nome as nome
                            from carrinho as c
                            inner join produto 
                            as p on p.id = c.idproduto WHERE c.idusuario = '{$_SESSION['id']}'");

while($b = mysqli_Fetch_Array($select)){

    $id = $b['idproduto'];
 $prod =$produtoDAO->selectID($id);

while($a = mysqli_Fetch_Array($prod)){


    echo "<br>". $a['nome']."";


    ?>

    <form action="pages/forms/comprar.php" method="post">
    <input type="hidden" value="<?php echo $a['id']  ?> "name="ID">
    <input type="hidden" name="OP" value="DEL">

    <button type="submit">X</button>
    <form>
<?php }



}






?>
