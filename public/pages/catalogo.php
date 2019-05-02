<?php
  if (isset($_SESSION["login"])) {?>




<section class="row">


<section class="col-xs-12">
<section class="text-center col-12">
    <?php
    for ($i=0; $i < 8 ; $i++) {
        echo  "<div class='box-complete '>

                <div class='bt font-Arimo'>
            
        

                 </div>

                <div class='bb'>
                  <a class='btn btn-primary' href='?page=comprar'> Comprar</a>
                </div>

              </div>";
    }


?>
</section >
</section>
  <?php } else{ ?>
    <div class="col-12 text-center">
      <h1 class="mt-5"> Para ver o Catalogo faça o Login </h1>
      <a href="?page=login" class="btn btn-primary  ">Login</a>
  </div>
<?php } ?>

