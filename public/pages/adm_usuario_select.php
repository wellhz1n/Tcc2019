

<?php


$tipo = $_POST["a"] ;
if(!empty($tipo)){
echo $tipo;
switch ($tipo) {
    case '0':
  return  $sql_usuario = mysqli_query($cx,"SELECT * FROM usuario ORDER BY nome DESC") or die( 
        mysqli_error($cx));
        break;
    case '1':
    echo $tipo;

    return  $sql_usuario = mysqli_query($cx,"SELECT * FROM usuario ORDER BY nivel_autoridade = $tipo") or die( 
        mysqli_error($cx));
        break;
        case '2':
        return  $sql_usuario = mysqli_query($cx,"SELECT * FROM usuario ORDER BY nivel_autoridade = 0") or die( 
            mysqli_error($cx));
        break;

    default:
        return  $sql_usuario = mysqli_query($cx,"SELECT * FROM usuario ORDER BY nome DESC") or die( 
        mysqli_error($cx));
        break;
}
}else{
    $tipo = 0;
    $sql_usuario = mysqli_query($cx,"SELECT * FROM usuario ORDER BY nome DESC") or die( 
        mysqli_error($cx));
    echo "deu ruim";
}
?>