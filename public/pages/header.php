<?php
@$buscaconf = mysqli_query($cx,"SELECT * FROM configuracoes WHERE chave = 'MUDARCORSITE' AND idusuario='{$_SESSION['id']}' ");
 $at = '';
while ($result = mysqli_fetch_array($buscaconf)) {
  $at = $result['ativo'];
  $cor = $result['cor'];
};
@$buscacontato = mysqli_query($cx,"SELECT * FROM configuracoes WHERE chave = 'DESABILITACONTATO' AND idusuario='{$_SESSION['id']}' ");

 ?>
<nav style=" background-color:<?php if(!empty($cor)){echo $cor;} ?> " class="navbar <?php
if($at != 1 && empty($cor)){
    echo 'navcor1';
}

  ?> font-weight-bolder navbar-expand-md " id="nav">
        <!-- Brand -->




        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul  class="navbar-nav itemNavPai">
        <?php if (!isset($_SESSION["login"]) || $_SESSION["nivel"] != 0) { ?>
              <?php $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);?>
                    <li class="nav-item <?php if($page=="home"||$page == null) echo "ativo"?> itemMenu">
                        <a class="nav-link bordaM bordaMInicio" href="?page=home" >Início</a>
                    </li>
                    <li class="nav-item <?php if($page=="contato") echo "ativo"?> itemMenu">
                        <a class="nav-link bordaM" href='?page=contato' >Contato</a>
                    </li>
                    <li class="nav-item <?php if($page=="catalogo") echo "ativo"?> itemMenu">
                        <a class="nav-link bordaM" href='?page=catalogo' >Catálogo</a>
                    </li>
                    <li class="nav-item bordaM itemMenu">
                        <a class="nav-link about">About</a>
                    </li>

                    <?php if (isset($_SESSION["login"])&& $_SESSION["nivel"]==1) { ?>


                        <!-- <a class="" style="cursor: pointer;" title="Carrinho" href="?pages=carrinho" ><i class="fa fa-shopping-cart"></i></a> -->
                    <?php } else{}?>


                    <?php    if (!isset($_SESSION["login"])) {?>

                        <li class="nav-item bordaM bordaMFinal itemMenu">
                        <a class="nav-link login" href="?page=login"><i class="fa fa-user"></i> Log-in </a>
                    </li>
                    <?php } else{ ?>
                      <li class="nav-item dropdown bordaM bordaMFinal itemMenu">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownContaNormal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>Conta
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownContaNormal">
                          <!-- <a class="dropdown-item" href="#">outra opção</a> -->
                          <a class="dropdown-item " href="?page=usuario_foto">Perfil</a>
                          <a class="dropdown-item" href="?page=usuario_editar_conta">Editar Conta</a>
                          <a class="dropdown-item login" title="Sair" href="pages/forms/sair.php"><i class="fa fa-sign-out-alt  p-1" ></i>Logout </a>
                        </div>


                      </li>

                    <?php } ?>

            <?php } else {?>
                <?php $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);?>
                              <?php

                              while ($result = mysqli_fetch_array($buscacontato)) {
                                $desc = $result['ativo'];

                                if (!empty($desc) && $desc == 1 ){

                                }

                                      else {


                         ?>
                            <li class="nav-item <?php if($page=="adm_contato"||$page == null) echo "ativo"?> itemMenu">
                                <a class="nav-link bordaM bordaMInicio" href="?page=adm_contato" >Contato</a>
                            </li>
                          <?php }   }; ?>
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
                              <li class="nav-item dropdown bordaM bordaMFinal itemMenu">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownConta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fa fa-user"></i>Conta
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownConta">
                                  <!-- <a class="dropdown-item" href="#">outra opção</a> -->
                                  <a class="dropdown-item " href="?page=usuario_foto">Perfil</a>
                                  <a class="dropdown-item " href="?page=configuracoes"><i class="fas fa-cog"></i>Configurações</a>

                                  <a class="dropdown-item" href="?page=usuario_editar_conta">Editar Conta</a>
                                  <a class="dropdown-item login" title="Sair" href="pages/forms/sair.php"><i class="fa fa-sign-out-alt  p-1" ></i>Logout </a>
                                </div>


                              </li>

                         <?php } ?>
                    <?php } ?>

         </ul>
      </div>

</nav>
