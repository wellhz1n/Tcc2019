<?php

$pid =$_GET['id'];


$saida = $produtoDAO->selectID($pid);
while($produto = mysqli_Fetch_Array($saida)):
?>
<div class="centralizar-pai">
    <div class="centralizar">
      <div class="row">

        <div id="leftMenuComprar" class="col-xs-3">
          <div id="pesquisaComprar">
            <form action="" method="post">
              <input type="text" name="pesquisaComprar" value="">
              <input type="submit" value="Colocar lupa aqui">
            </form>
          </div>

          <div id="produtosSemelhantes">
            <span id="produtosComprar">Produtos</span>
          </div>
        </div>

        <div id="centroComprar" class="col-xs-6">
          <img  class="img-fluid w-25" src="assets/img/produto/<?php echo $produto['img']?>">
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
        </div>
        <div id="rightMenuComprar" class="col-xs-3">
        </div>
      </div>
    </div>
</div>
<?php endwhile;?>
