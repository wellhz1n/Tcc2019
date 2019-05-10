<?php
  if (isset($_SESSION["login"])) {?>




<section class="row">


<section class="col-xs-12">
<section class="text-center col-12">
    <?php

      $buscaP = mysqli_query($cx,"SELECT * FROM produto ORDER BY valor ASC");

      while($p =mysqli_fetch_array($buscaP)): ?>
     <div class='box-complete '>

                <div class='bt font-Arimo'>
                  <img class='img-responsive mt-2' src="assets/img/produto/<?php echo $p["img"]; ?>">
                  
                  
                  <p><?php echo $p["nome"] ;?></p>
                </div>
                
                <div class='bb'>
                  <a class='btn btn-primary' href='?page=comprar'> Comprar</a>
                </div>
                  <p>R$:<?php echo $p['valor'];  ?></p>
              </div>
    

  <?php endwhile;?>
</section >
</section>
  <?php } else{ ?>
    <div class="col-12 text-center">
      <h1 class="mt-5"> Para ver o Catalogo faça o Login </h1>
      <a href="?page=login" class="btn btn-primary  ">Login</a>
  </div>
<?php } ?>

