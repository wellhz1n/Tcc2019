<?php require '../../../bootstrap.php';?>



<?php
$id = $_POST["ID"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];




?>
<link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.css">
<div class="col-12  ">
<form action="ad_c_ed.php" class="col-4 offset-4 mt-5 alert-dark p-5" method="POST">
        <input type="text" id="ID" value="<?php echo $id;  ?> " name="ID" hidden>       

    <label>Nome</label>
    <input type="text" value="<?php echo $nome;  ?> " name="nome" class="form-control">
    <label>Email</label>
    <input type="text" value="<?php echo $email;  ?> " name="email" class="form-control">
    <label>Assunto</label>
    <input type="text" value="<?php echo $assunto;  ?> " name="assunto" class="form-control">
    
    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
    
</form>
</div>