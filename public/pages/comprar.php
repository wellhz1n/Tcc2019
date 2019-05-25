<?php

$pid =$_GET['id'];


$query = mysqli_query($cx,"SELECT * FROM produto WHERE id = $pid");
while($produto = mysqli_Fetch_Array($query)):
?>
<img  class="img-fluid h-25 w-25" src="assets/img/produto/<?php echo $produto['img']?>">
<h1>Produto: <?php echo $produto['nome']; ?></h1>
<p>Descrição: <?php echo $produto['descricao']; ?></p>

<h1>R$:<?php echo $produto['valor']; ?></h1>

<?php endwhile;?>