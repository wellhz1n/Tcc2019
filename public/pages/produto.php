
<?php if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) { ?>









<div class="col-6 offset-3 text-center">
<h1>Cadastro de Produto</h1>
<form action="pages/forms/new_produto.php" method="post" enctype="multipart/form-data" name="cadastro" >
Nome:<br />
<input class="form-control " type="text" name="nome" /><br /><br />
Descrição:<br />
<textarea class="form-control " type="text" maxlength="200" name="descricao" ></textarea><br /><br />

Preco:<br />
<input class="form-control " type="text" name="valor" /><br /><br />
Foto de exibição:<br />
<input  class="form-control-file offset-2 mt-3 " type="file" name="img" /><br /><br />

<input class="btn btn-primary" type="submit" name="cadastrar" value="Cadastrar" />
</form>
</div>
<?php } else{
    header("Location: http://localhost:8081/Tcc2019/public/?page=home");
    die(); }?>