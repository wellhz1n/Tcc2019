<?php
// Conexão com o banco de dados
require '../../../bootstrap.php';

$id = $_SESSION['id'];
$busca = mysqli_query($cx,"SELECT * FROM usuario WHERE usuario.id_user = $id");
    while($usuario = mysqli_fetch_array($busca)):

        
            if($usuario['img']!=""){

                $DelProduto = mysqli_query($cx,"SELECT img FROM usuario WHERE usuario.id_user = '".$id."'");
                    $ft = mysqli_fetch_object($DelProduto);


            unlink("../../assets/img/usuario/".$ft->img."");

            }











    //Exemplo para descobrir o usuario_webserver



	// Recupera os dados dos campos
if (isset($_POST["envia"])){


	$foto = $_FILES["img"];

	
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		
		// Largura máxima em pixels
		$largura = 150;
		// Altura máxima em pixels
		$altura = 180;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000;

		$error = array();

    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "../../assets/img/usuario/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco
        $newP = mysqli_query($cx,"UPDATE  usuario set usuario.img = '{$nome_imagem}' WHERE usuario.id_user = $id ");
		 
			// Se os dados forem inseridos com sucesso
			if ($newP){
				header("Location: http://localhost:8081/Tcc/public/?page=usuario_foto");
				die(); 
			}
		}
	
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}
}
endwhile;
?>
