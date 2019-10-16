<?php
if (isset($_SESSION["login"])&& $_SESSION["nivel"] == 0) { ?>

 <section class="col-12">
    <div class="row">
    <table class="table col-12 w-100 text-center table-active table-bordered table-hover ">
        <thead class="thead-dark">
          <tr>

            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Assunto</th>
            <th scope="col"></th>


          </tr>
        </thead>
        <tbody>
            <?php while ($pesq = mysqli_fetch_array($sql_contato)):?>
          <tr>
             <!-- NO FUTURO IMPLEMENTAR ISSO ondblclick=" document.getElementById('form').submit();" -->

              <form action="pages/forms/adm_form_contato_edit.php" id="form" name="del" method="POST">
                  <input type="text" id="ID" value="<?php echo $pesq["id"];  ?> " name="ID" hidden>
                  <input type="text" id="ID" value="<?php echo $pesq["Nome"];  ?> " name="nome" hidden>
                  <input type="text" id="ID" value="<?php echo $pesq["Email"];  ?> " name="email" hidden>
                  <input type="text" id="ID" value="<?php echo $pesq["Assunto"];  ?> " name="assunto" hidden>


            <td><?php  $id = $pesq["id"];  echo  $pesq["Nome"];  ?></td>
            <td><?php echo  $pesq["Email"]  ?></td>
            <td><?php echo  $pesq["Assunto"]  ?></td>

            <th scope="col "><button type="submit"  formaction="pages/forms/adm_form_contato_edit.php" class="btn btn-info"><i class="fa fa-edit"></i>Editar</button>
            <button type="submit"  formaction="pages/forms/adm_form_contato.php" class="btn btn-danger"><i class="fa fa-trash"></i>Deletar</button></th>



        </tr>
    </form>
<?php endwhile; ?>

        </tbody>
      </table>
</div>


</section>




<?php }elseif (isset($_SESSION["login"])&& $_SESSION["nivel"] == 1) {

    header("Location: http://localhost:8081/Tcc2019/public/?page=home");
    die();
?>
<?php } else{
    header("Location: http://localhost:8081/Tcc2019/public/?page=home");
    die();

} ?>
