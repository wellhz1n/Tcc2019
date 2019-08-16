<?php

require '../../../bootstrap.php';

$nome = $_POST['pesquisaCompra'];
$buscaProduto = mysqli_query($cx, "SELECT * FROM produto WHERE nome like '%{$nome}%' limit 5 ");



?>
<?php if (mysqli_num_rows($buscaProduto) > 0) {
  while ($prod = mysqli_fetch_array($buscaProduto)) : if ($prod['id'] != 17) { ?>
      <div class="produtinho">
        <p><?php echo $prod['nome'] ?></p>
        <img class="img-fluid w-25" src="assets/img/produto/<?php echo $prod['img'] ?>">
        <div>
          <a class='btn btn-primary' href='?page=comprar&id=<?php echo $prod['id']; ?>'><?php echo $prod['valor'] != 0 ? $prod['valor'] : "Gratis" ?></a>
        </div>
      </div>


    <?php } else if($prod['id'] == 17 && mysqli_num_rows($buscaProduto) ==1 ) { ?>
      <p>Produto <?php echo $nome ?> Nao existe</p>
    <?php }
  endwhile;  ?>




<?php } else { ?>
  <p>Produto <?php echo $nome ?> Nao existe</p>
<?php } ?>