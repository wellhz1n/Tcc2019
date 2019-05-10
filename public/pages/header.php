<?php   ?>
<nav class="navbar font-weight-bolder navbar-expand-md navbar-dark" id="nav">
        <!-- Brand -->




        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul  class="navbar-nav ">
        <?php if (!isset($_SESSION["login"]) || $_SESSION["nivel"] != 0) { ?>
              <?php $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);?>

                    <li class="nav-item <?php if($page=="home"||$page == null) echo "ativo"?> itemMenu">
                        <a class="nav-link bordaM bordaMInicio" href="?page=home" >Início</a>
                    </li>
                    <li class="nav-item <?php if($page=="contato") echo "ativo"?> itemMenu">
                        <a class="nav-link bordaM" href='?page=contato' >Contato</a>
                    </li>
                    <li class="nav-item <?php if($page=="catalogo") echo "ativo"?> itemMenu">
                        <a class="nav-link bordaM" href='?page=catalogo' >Catalogo</a>
                    </li>

                    <li class="nav-item bordaM bordaMFinal itemMenu">
                        <a class="nav-link about">About</a>
                    </li>

                    <?php if (isset($_SESSION["login"])&& $_SESSION["nivel"]==1) { ?>


                        <a class="" style="cursor: pointer;" title="Carrinho" href="?pages=carrinho" ><i class="fa fa-shopping-cart"></i></a>
                    <?php } else{}?>


                    <?php    if (!isset($_SESSION["login"])) {?>

                        <li class="nav-item bordaM bordaMFinal itemMenu">
                        <a class="nav-link login" href="?page=login"><i class="fa fa-user"></i> Log-in </a>
                    </li>
                    <?php } else{ ?>
                        <li class="nav-item bordaM bordaMFinal itemMenu">
                        <a class="nav-link login" title="Sair" href="pages/forms/sair.php"><i class="fa fa-sign-out-alt  p-1" ></i><?php echo $_SESSION["usuario"];?> </a>
                    </li>

                    <?php } ?>

            <?php } else {?>
                <?php $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);?>

                            <li class="nav-item <?php if($page=="adm_contato"||$page == null) echo "ativo"?> itemMenu">
                                <a class="nav-link bordaM bordaMInicio" href="?page=adm_contato" >Contato</a>
                            </li>
                            <li class="nav-item <?php if($page=="adm_usuario"||$page == null) echo "ativo"?> itemMenu">
                                <a class="nav-link bordaM bordaMInicio" href="?page=adm_usuario" >Usuário</a>
                            </li>
                            <li class="nav-item <?php if($page=="adm_produto"||$page == null) echo "ativo"?> itemMenu">
                                <a class="nav-link bordaM bordaMInicio" href="?page=adm_produto" >Produtos</a>
                            </li>



                            <?php    if (!isset($_SESSION["login"])) {?>

                                <li class="nav-item bordaM bordaMFinal itemMenu">
                                <a class="nav-link login" href="?page=login"><i class="fa fa-user"></i> Log-in </a>
                            </li>

                            <?php } else{ ?>
                                <li class="nav-item bordaM bordaMFinal itemMenu">
                                <a class="nav-link login" title="Sair" href="pages/forms/sair.php"><i class="fa fa-sign-out-alt  p-1" ></i><?php echo $_SESSION["usuario"];?> </a>
                            </li>

                         <?php } ?>
                    <?php } ?>

         </ul>
      </div>

</nav>
