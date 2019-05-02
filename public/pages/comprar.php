<section class="col-12">
<div class="row">
    <table class="table  w-100 text-center">
        <thead class="thead-dark">
          <tr>
            
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Assunto</th>
            <th scope="col"></th>


          </tr>
        </thead>
        <tbody>
            <?php   while ($pesq = mysqli_fetch_array($sql_contato)):?>
          <tr>
              <form action="pages/forms/comprar.php" method="POST">
                  <input type="text" value="<?php echo $pesq["id"];  ?> " name="ID" hidden>

            <td><?php  $id = $pesq["id"];  echo  $pesq["Nome"];  ?></td>
            <td><?php echo  $pesq["Email"]  ?></td>
            <td><?php echo  $pesq["Assunto"]  ?></td>
            
            <?php   
                //  $ID = filter_input(INPUT_POST,'ID',FILTER_SANITIZE_STRING);
                // $ID = $ID
            
            ?>
            <th scope="col"><button type="submit"  class="btn btn-danger">Delete</button></th>
            </form>

          </tr>
<?php endwhile; ?>
    
        </tbody>
      </table>
</div>


</section> 

