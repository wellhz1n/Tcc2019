<?php 
$select = mysqli_query($cx,"select idproduto from carrinho where idusuario = '{$_SESSION['id']}'");

while($b = mysqli_Fetch_Array($select)){

    $id = $b['idproduto'];
 $prod =$produtoDAO->selectID($id);

while($a = mysqli_Fetch_Array($prod)){
    
    
    echo "<br>". $a['nome']."";


    ?>

    <form action="pages/forms/del_carrinho.php" method="post">
    <input type="hidden" value="<?php echo $a['id']  ?> "name="ID">
    <button type="submit">X</button>
    <form>
<?php } 



}






?>