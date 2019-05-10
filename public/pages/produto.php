
<?php if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) { ?>










<h1>Cadastro de Produto</h1>
<form action="pages/forms/new_produto.php" method="post" enctype="multipart/form-data" name="cadastro" >
Nome:<br />
<input type="text" name="nome" /><br /><br />
Descrição:<br />
<textarea type="text" maxlength="200" name="descricao" ></textarea><br /><br />

Preco:<br />
<input type="text" name="valor" /><br /><br />
Foto de exibição:<br />
<input type="file" name="img" /><br /><br />

<input type="submit" name="cadastrar" value="Cadastrar" />
</form>

<?php } else{
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die(); }?>