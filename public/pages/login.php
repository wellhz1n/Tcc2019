<section class="login-fundo    ">
    <div class='ripple-background'>
        <div class='circle xxlarge shade1'></div>
        <div class='circle xlarge shade2'></div>
        <div class='circle large shade3'></div>
        <div class='circle mediun shade4'></div>
        <div class='circle small shade5'></div>
      </div>
<form action="pages/forms/login.php" id="login" class="login-form  " autocomplete="off"  method="POST">
    <h1>Log-in</h1>
    <div class="form-login ">
    <div id="err">
    <span class="text-danger"><?php  if(!empty($_SESSION['err'])){echo $_SESSION['err'];}  ?></span>
    </div>
        <?php  unset($_SESSION["err"]); ?>
    <label for="usuario" class=""></label>
    <input type="text" placeholder="Usuário"  class=" " id="usuario" name="usuario"  />
      <br>
      
    <label for="senha" class=""></label>
    <input type="password" placeholder="Senha" class="" id="senha" name="senha"  />
    <br>
  
        <button class="bt-login"   type="submit">Log-in</button>
 
    </div>
    
    
</form>

</section>