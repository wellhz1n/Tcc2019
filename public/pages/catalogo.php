<?php
  @$Order = $_GET['order'] == "DESC"?"DESC":"ASC" ;

  if (isset($_SESSION["login"])) {?>




<section class="row ">

  <div class="col-12 h-25 text-center mt-5">
  <a class="btn btn-danger" href="?page=catalogo&order=DESC" ><i class="fa <?php if($Order == "DESC") echo 'fa-check';?> " aria-hidden="true"></i>Mais Caros</a>
  <a class="btn btn-success" href="?page=catalogo&order=ASC" ><i class="fa   <?php if($Order == "ASC"||$Order == null) echo "fa-check";?> fa-caret-rigth" aria-hidden="true"></i>Mais Baratos</a>
  <div>
<section class="col-xs-12">
  <section class="text-center col-12">

    <?php
      @$buscaP = mysqli_query($cx,"SELECT * FROM produto WHERE id <> 17 ORDER BY valor ".$Order);

      while($p =mysqli_fetch_array($buscaP)): ?>
     <div class='box-complete '>

                <div class='bt font-Arimo' ondblclick=" window.location.href='?page=comprar&id=<?php echo $p['id'];?>';">
                  <img class='img-responsive mt-2' src="assets/img/produto/<?php echo $p["img"]; ?>">
                  
                  
                  <p><?php echo $p["nome"] ;?></p>
                </div>
                
                <div class='bb'>
                  <a class='btn btn-primary' href='?page=comprar&id=<?php echo $p['id']; ?>'> Comprar</a>
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

