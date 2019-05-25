<?php
$buscaconf = mysqli_query($cx,"SELECT * FROM configuracoes WHERE chave = 'MUDARCORSITE' AND idusuario= '{$_SESSION['id']}' ");
while ($result = mysqli_fetch_array($buscaconf)) {
  $at = $result['ativo'];
  $cor = $result['cor'];
}
$buscadesc = mysqli_query($cx,"SELECT * FROM configuracoes WHERE chave = 'DESABILITACONTATO' AND idusuario= '{$_SESSION['id']}' ");
while ($result = mysqli_fetch_array($buscadesc)) {
  $desc = $result['ativo'];
}
$buscac = mysqli_query($cx,"SELECT * FROM configuracoes ");
if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) {


?>
<div class="" style="width:100%; height: 100%; align-items: center; justify-content: center; display:inline;">
<div class='row my-5 p-5 w-75' style=" position:relative;  margin-left:15%;    box-shadow: 1px 2px 14px 5px rgba(0,0,0,0.75);">
<div class="col-12 text-center ">
  <h1>Mudar cor</h1>
  <form action="pages/forms/conf.php" id="formdcor" method="POST">


    <input type="hidden" name="cor" value="0">
    <input type="hidden" name="nome" value="MUDARCORSITE">
    <input type="color" name="corsinha" id="cor"  <?php if(@$at !=1){echo"disabled";} ?> value="<?php if(empty($cor)){echo "#0e0033";}   else{ echo $cor;}?>" >
    <div class="row"></div>
    <input name="cor" id="check" <?php if(@$at ==1){echo"checked";} ?>  type="checkbox" value="1" >

  <div class="row ">
    <div class="col-12">
    <button type="button"  id="btncor"   class="btn btn-success">Confirmar</button>

    </div>
  </div>
  </form>


</div>
</div>
<hr>
<div class="" style="width:100%; height: 100%; align-items: center; justify-content: center; display:inline;">
<div class='row my-5 p-5 w-75' style=" position:relative;  margin-left:15%;    box-shadow: 1px 2px 14px 5px rgba(0,0,0,0.75);">
<div class="col-12 text-center">
  <h1>Desabilitar Contato</h1>
  <form action="pages/forms/conf.php" name="desabilitacontato" id="formdcontato" method="POST">


    <input type="hidden" name="cor" value="0">
    <input type="hidden" name="nome" value="DESABILITACONTATO">
    <input name="cor" id="check" <?php if(@$desc ==1){echo"checked";} ?>  type="checkbox" value="1" >

  <div class="row ">
    <div class="col-12">
    <button type="button" id="btncontato"  class="btn btn-success">Confirmar</button>

    </div>
  </div>
  </form>


          </div>
      </div>
</div>



















<?php } elseif (isset($_SESSION["login"])&& $_SESSION["nivel"] == 1) {

    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();
?>
<?php } else{
    header("Location: http://localhost:8081/Tcc/public/?page=home");
    die();

} ?>
