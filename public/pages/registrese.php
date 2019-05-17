<section style="" class="login-fundo    ">
    <div class='ripple-background'>
        <div class='circle xxlarge shade1'></div>
        <div class='circle xlarge shade2'></div>
        <div class='circle large shade3'></div>
        <div class='circle mediun shade4'></div>
        <div class='circle small shade5'></div>
      </div>
<form action="pages/forms/registrese-form.php" id="login" class="login-form  " autocomplete="off"  method="POST">
    <h1>Registre-se</h1>
    <div class="form-login">
    <div id="err">
    <span id="errado" class="text-danger"><?php  if(!empty($_SESSION['erro'])){echo $_SESSION['erro'];}  ?></span>
    </div>
        <?php  unset($_SESSION["erro"]); ?>
    <label for="usuario" class=""></label>
    <input type="text" placeholder="Usuário"  class=" " id="usuarios" name="usuario"  />
      <br>
      
    <label for="senha" class=""></label>
    <input type="password" placeholder="Senha" class="" id="senha" name="senha"  />
    <br>
  
        <button class="bt-login"   type="submit">Registrar</button>
 
    </div>
    
   
    
  </form>

</section>