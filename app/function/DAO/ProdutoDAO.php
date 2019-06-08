<?php 
            



      function  GetProdutosAll($Order){
        $cx = mysqli_connect("127.0.0.1", "root", "");
            $sql = mysqli_query($cx,"SELECT * FROM produto WHERE id <> 17 ORDER BY valor ".$Order);

        }


   