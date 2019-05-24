<?php
$buscaconf = mysqli_query($cx,"SELECT * FROM configuracoes WHERE chave = 'MUDARCORSITE'");
while ($result = mysqli_fetch_array($buscaconf)) {
  $at = $result['ativo'];
}
$buscac = mysqli_query($cx,"SELECT * FROM configuracoes");
if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) {


?>


<div class="col-12 text-center">
  <h1>Mudar cor</h1>
  <form action="pages/forms/conf.php" method="POST">


    <input type="hidden" name="cor" value="0">
    <input type="hidden" name="nome" value="MUDARCORSITE">
    <input name="cor" id="check" <?php if($at ==1){echo"checked";} ?>  type="checkbox" value="1" >

  <div class="row ">
    <div class="col-12">
    <button type="submit" class="btn btn-success">Confirmar</button>

    </div>
  </div>
  </form>


</div>























<?php } elseif (isset($_SESSION["login"])&& $_SESSION["nivel"] == 1) {

    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();
?>
<?php } else{
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();

} ?>
