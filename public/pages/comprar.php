<?php

$pid =$_GET['id'];


$saida = $produtoDAO->selectID($pid);
while($produto = mysqli_Fetch_Array($saida)):
?>
<img  class="img-fluid h-25 w-25" src="assets/img/produto/<?php echo $produto['img']?>">
<h1>Produto: <?php echo $produto['nome']; ?></h1>
<p>Descrição: <?php echo $produto['descricao']; ?></p>
<p>Valor:
<?php  if($produto['valor'] == 0 || empty($produto['valor'])){?>
<h1 class='text-danger'><?php echo "GRATIS"; ?></h1>
<?php } else{ ?>
<h1>R$:<?php echo $produto['valor']; ?></h1>

<?php } ?>
</p> 
<form action="pages/forms/comprar.php" method="post">
<input type="hidden" name="ID" value="<?php echo $pid ?>">
<input type="hidden" name="OP" value="INS">

<button type="submit">Adicionar ao carrinho</button>
</form>
<?php endwhile;?>
