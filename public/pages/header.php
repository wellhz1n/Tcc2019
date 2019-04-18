
<nav class="navbar  font-weight-bolder navbar-expand-md navbar-dark" id="nav">
        <!-- Brand -->




        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul  class="navbar-nav">
              <?php $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);?>

                    <li class="nav-item <?php if($page=="home"||$page == null) echo "ativo"?> ">
                        <a class="nav-link bordaM bordaMInicio" href="?page=home" >Início</a>
                    </li>
                    <li class="nav-item <?php if($page=="contato") echo "ativo"?>">
                        <a class="nav-link bordaM" href='?page=contato' >Contato</a>
                    </li>
                    <li class="nav-item <?php if($page=="catalogo") echo "ativo"?>">
                        <a class="nav-link bordaM" href='?page=catalogo' >Catalogo</a>
                    </li>

                    <li class="nav-item bordaM bordaMFinal">
                        <a class="nav-link about"  >About</a>
                    </li>
         </ul>
      </div>

</nav>
